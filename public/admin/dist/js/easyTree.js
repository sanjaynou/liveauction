/**
 * Easy Tree 简易的jquery树插件，将一个无序列表转化成树
 * 支持单选、新增、编辑、删除
 * @Copyright yuez.me 2014
 * @Author yuez
 * @Version 0.1
 */
(function ($) {
    $.fn.EasyTree = function (options) {
        var defaults = {
            selectable: true,
            deletable: false,
            editable: false,
            addable: false,
            i18n: {
                deleteNull: 'Please select an item to delete',
                deleteConfirmation: 'Are you sure you want to perform the delete operation?',
                confirmButtonLabel: 'Confirm',
                editNull: 'Please select the item to edit',
                editMultiple: 'Can only edit one item at a time',
                addMultiple: 'Please select an add',
                collapseTip: 'Collapse branch',
                expandTip: 'Expand branch',
                selectTip: 'Select',
                unselectTip: 'Cancel Selection',
                editTip: 'Edit',
                addTip: 'Add to',
                deleteTip: 'Delete',
                cancelButtonLabel: 'Cancel'
            }
        };

        var warningAlert = $('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong></strong><span class="alert-content"></span> </div> ');
        var dangerAlert = $('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong></strong><span class="alert-content"></span> </div> ');

        var createInput = $('<div class="input-group"><input type="text" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-default btn-success confirm"></button> </span><span class="input-group-btn"><button type="button" class="btn btn-default cancel"></button> </span> </div> ');

        options = $.extend(defaults, options);

        this.each(function () {
            var easyTree = $(this);
            $.each($(easyTree).find('ul > li'), function() {
                var text;
				var id;
                if($(this).is('li:has(ul)')) {
                    var children = $(this).find(' > ul');
                    $(children).remove();
                    text = $(this).text();
					id = $(this).attr('id');
                    $(this).html('<span><span class="glyphicon"></span><a href="javascript: void(0);" class="ajax_render" id="'+id+'"></a> </span>');
                    $(this).find(' > span > span').addClass('glyphicon-folder-open');
                    $(this).find(' > span > a').text(text);
                    $(this).append(children);
                }
                else {
                    text = $(this).text();
					id = $(this).attr('id');
                    $(this).html('<span><span class="glyphicon"></span><a href="javascript: void(0);" class="ajax_render" id="'+id+'"></a> </span>');
                    $(this).find(' > span > span').addClass('glyphicon-file');
                    $(this).find(' > span > a').text(text);
                }
            });

            $(easyTree).find('li:has(ul)').addClass('parent_li').find(' > span').attr('title', options.i18n.collapseTip);

            // add easy tree toolbar dom
            if (options.deletable || options.editable || options.addable) {
                $(easyTree).prepend('<div class="easy-tree-toolbar" style="display:none;"></div> ');
            }

            // addable
            if (options.addable) {
                $(easyTree).find('.easy-tree-toolbar').append('<div class="create"><button class="btn btn-default btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span></button></div> ');
                $(easyTree).find('.easy-tree-toolbar .create > button').attr('title', options.i18n.addTip).click(function () {
                    var createBlock = $(easyTree).find('.easy-tree-toolbar .create');
                    $(createBlock).append(createInput);
                    $(createInput).find('input').focus();
                    $(createInput).find('.confirm').text(options.i18n.confirmButtonLabel);
                    $(createInput).find('.confirm').click(function () {
                        if ($(createInput).find('input').val() === '')
                            return;
                        var selected = getSelectedItems();
                        var item = $('<li><span><span class="glyphicon glyphicon-file"></span><a href="javascript: void(0);">' + $(createInput).find('input').val() + '</a> </span></li>');
                        $(item).find(' > span > span').attr('title', options.i18n.collapseTip);
                        $(item).find(' > span > a').attr('title', options.i18n.selectTip);
                        if (selected.length <= 0) {
                            $(easyTree).find(' > ul').append($(item));
                        } else if (selected.length > 1) {
                            $(easyTree).prepend(warningAlert);
                            $(easyTree).find('.alert .alert-content').text(options.i18n.addMultiple);
                        } else {
                            if ($(selected).hasClass('parent_li')) {
                                $(selected).find(' > ul').append(item);
                            } else {
                                $(selected).addClass('parent_li').find(' > span > span').addClass('glyphicon-folder-open').removeClass('glyphicon-file');
                                $(selected).append($('<ul></ul>')).find(' > ul').append(item);
                            }
                        }
                        $(createInput).find('input').val('');
                        if (options.selectable) {
                            $(item).find(' > span > a').attr('title', options.i18n.selectTip);
                            $(item).find(' > span > a').click(function (e) {
                                var li = $(this).parent().parent();
                                if (li.hasClass('li_selected')) {
                                    $(this).attr('title', options.i18n.selectTip);
                                    $(li).removeClass('li_selected');
                                }
                                else {
                                    $(easyTree).find('li.li_selected').removeClass('li_selected');
                                    $(this).attr('title', options.i18n.unselectTip);
                                    $(li).addClass('li_selected');
                                }

                                if (options.deletable || options.editable || options.addable) {
                                    var selected = getSelectedItems();
                                    if (options.editable) {
                                        if (selected.length <= 0 || selected.length > 1)
                                            $(easyTree).find('.easy-tree-toolbar .edit > button').addClass('disabled');
                                        else
                                            $(easyTree).find('.easy-tree-toolbar .edit > button').removeClass('disabled');
                                    }

                                    if (options.deletable) {
                                        if (selected.length <= 0 || selected.length > 1)
                                            $(easyTree).find('.easy-tree-toolbar .remove > button').addClass('disabled');
                                        else
                                            $(easyTree).find('.easy-tree-toolbar .remove > button').removeClass('disabled');
                                    }

                                }

                                e.stopPropagation();

                            });
                        }
                        $(createInput).remove();
                    });
                    $(createInput).find('.cancel').text(options.i18n.cancelButtonLabel);
                    $(createInput).find('.cancel').click(function () {
                        $(createInput).remove();
                    });
                });
            }

            // editable
            if (options.editable) {
                $(easyTree).find('.easy-tree-toolbar').append('<div class="edit"><button class="btn btn-default btn-sm btn-primary disabled"><span class="glyphicon glyphicon-edit"></span></button></div> ');
                $(easyTree).find('.easy-tree-toolbar .edit > button').attr('title', options.i18n.editTip).click(function () {
                    $(easyTree).find('input.easy-tree-editor').remove();
                    $(easyTree).find('li > span > a:hidden').show();
                    var selected = getSelectedItems();
                    if (selected.length <= 0) {
                        $(easyTree).prepend(warningAlert);
                        $(easyTree).find('.alert .alert-content').html(options.i18n.editNull);
                    }
                    else if (selected.length > 1) {
                        $(easyTree).prepend(warningAlert);
                        $(easyTree).find('.alert .alert-content').html(options.i18n.editMultiple);
                    }
                    else {
                        var value = $(selected).find(' > span > a').text();
                        $(selected).find(' > span > a').hide();
                        $(selected).find(' > span').append('<input type="text" class="easy-tree-editor">');
                        var editor = $(selected).find(' > span > input.easy-tree-editor');
                        $(editor).val(value);
                        $(editor).focus();
                        $(editor).keydown(function (e) {
                            if (e.which == 13) {
                                if ($(editor).val() !== '') {
                                    $(selected).find(' > span > a').text($(editor).val());
                                    $(editor).remove();
                                    $(selected).find(' > span > a').show();
                                }
                            }
                        });
                    }
                });
            }

            // deletable
            if (options.deletable) {
                $(easyTree).find('.easy-tree-toolbar').append('<div class="remove"><button class="btn btn-default btn-sm btn-danger disabled"><span class="glyphicon glyphicon-remove"></span></button></div> ');
                $(easyTree).find('.easy-tree-toolbar .remove > button').attr('title', options.i18n.deleteTip).click(function () {
                    var selected = getSelectedItems();
                    if (selected.length <= 0) {
                        $(easyTree).prepend(warningAlert);
                        $(easyTree).find('.alert .alert-content').html(options.i18n.deleteNull);
                    } else {
                        $(easyTree).prepend(dangerAlert);
                        $(easyTree).find('.alert .alert-content').html(options.i18n.deleteConfirmation)
                            .append('<a style="margin-left: 10px;" class="btn btn-default btn-danger confirm"></a>')
                            .find('.confirm').html(options.i18n.confirmButtonLabel);
                        $(easyTree).find('.alert .alert-content .confirm').on('click', function () {
                            $(selected).find(' ul ').remove();
                            if($(selected).parent('ul').find(' > li').length <= 1) {
                                $(selected).parents('li').removeClass('parent_li').find(' > span > span').removeClass('glyphicon-folder-open').addClass('glyphicon-file');
                                $(selected).parent('ul').remove();
                            }
                            $(selected).remove();
                            $(dangerAlert).remove();
                        });
                    }
                });
            }

            // collapse or expand
            $(easyTree).delegate('li.parent_li > span', 'click', function (e) {
                var children = $(this).parent('li.parent_li').find(' > ul > li');
                if (children.is(':visible')) {
                    children.hide('fast');
                    $(this).attr('title', options.i18n.expandTip)
                        .find(' > span.glyphicon')
                        .addClass('glyphicon-folder-close')
                        .removeClass('glyphicon-folder-open');
                } else {
                    children.show('fast');
                    $(this).attr('title', options.i18n.collapseTip)
                        .find(' > span.glyphicon')
                        .addClass('glyphicon-folder-open')
                        .removeClass('glyphicon-folder-close');
                }
                e.stopPropagation();
            });

            // selectable, only single select
            if (options.selectable) {
                $(easyTree).find('li > span > a').attr('title', options.i18n.selectTip);
                $(easyTree).find('li > span > a').click(function (e) {
                    var li = $(this).parent().parent();
                    if (li.hasClass('li_selected')) {
                        $(this).attr('title', options.i18n.selectTip);
                        $(li).removeClass('li_selected');
						$('.parent_id').val('');
						$('.del-cat').hide();
						$('.edit-cat').hide();
						$('.edit_cat_hidden').val('');
						$('#add').show();
						$('#edit').hide();
						$('#category_name_edit').val('');
                    }
                    else {
                        $(easyTree).find('li.li_selected').removeClass('li_selected');
                        $(this).attr('title', options.i18n.unselectTip);
                        $(li).addClass('li_selected');
						var ids =  $(easyTree).find('li.li_selected > span > a').attr('id');
						var desc =  $(easyTree).find('li.li_selected').attr('desc');
						var ids_val =  $(easyTree).find('li.li_selected > span > a').text();
						$('.parent_id').val(ids);
						$('.del-cat').show();
						$('.del-cat').attr('id',ids);
						$('.edit-cat').attr('id',ids);
						$('.edit-cat').show();
						$('.edit_cat_hidden').val(ids);
						$('#add').hide();
						$('#edit').show();
						$('#category_name_edit').val($.trim(ids_val));
						$('#description_edit').val(desc);//alert(desc);
                    }

                    if (options.deletable || options.editable || options.addable) {
                        var selected = getSelectedItems();
                        if (options.editable) {
                            if (selected.length <= 0 || selected.length > 1)
                                $(easyTree).find('.easy-tree-toolbar .edit > button').addClass('disabled');
                            else
                                $(easyTree).find('.easy-tree-toolbar .edit > button').removeClass('disabled');
                        }

                        if (options.deletable) {
                            if (selected.length <= 0 || selected.length > 1)
                                $(easyTree).find('.easy-tree-toolbar .remove > button').addClass('disabled');
                            else
                                $(easyTree).find('.easy-tree-toolbar .remove > button').removeClass('disabled');
                        }

                    }

                    e.stopPropagation();

                });
            }

            // Get selected items
            var getSelectedItems = function () {
                return $(easyTree).find('li.li_selected');
            };
        });
    };
})(jQuery);
