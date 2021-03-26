/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
! function (global, factory) { if ("function" == typeof define && define.amd) define("/App/Taskboard", ["exports", "Site"], factory);
    else if ("undefined" != typeof exports) factory(exports, require("Site"));
    else { var mod = { exports: {} };
        factory(mod.exports, global.Site), global.AppTaskboard = mod.exports } }(this, function (exports, _Site2) { "use strict";
    
    function getInstance() { return instance || (instance = new AppTaskboard), instance } Object.defineProperty(exports, "__esModule", { value: !0 }), exports.getInstance = exports.run = exports.AppTaskboard = void 0; var _Site3 = babelHelpers.interopRequireDefault(_Site2)
        , StageList = function () {
            function StageList($el, data) { babelHelpers.classCallCheck(this, StageList), this.$el = $el, this.data = data, this.render(), this.$el.sortable({ handle: ".taskboard-stage-header" }) } return babelHelpers.createClass(StageList, [{ key: "add", value: function () { var stage = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    stage instanceof Stage ? this.$el.append(stage.$el) : this.add(this.createStage(stage)) } }, { key: "createStage", value: function (data) { return new Stage(data) } }, { key: "render", value: function () { for (var length = this.data.length, i = 0; i < length; i++) { var stage = this.createStage(this.data[i]);
                        this.add(stage) } } }]), StageList }()
        , Stage = function () {
            function Stage(data) { babelHelpers.classCallCheck(this, Stage), this.data = data, this.$el = null, this.$taskList = null, this.taskList = null, this.render(), this.$stageDropdownArrow = $('.taskboard-stage-actions a[data-toggle="dropdown"]', this.$el), this.bindStageDropdownArrow(), this.$renameBtn = $(".taskboard-stage-rename", this.$el), this.bindRenameBtn(), this.$renameSaveBtn = $(".taskboard-stage-rename-save", this.$el), this.bindRenameSaveBtn(), this.$deleteBtn = $(".taskboard-stage-delete", this.$el), this.bindDeleteBtn() } return babelHelpers.createClass(Stage, [{ key: "render", value: function () { this.$el = $(this.getTpl(this.data.title)), this.$taskList = this.$el.find(".taskboard-list"); var tasksData = this.data.tasks;
                    this.taskList = new TaskList(this.$taskList, tasksData) } }, { key: "getTpl", value: function (title) { return '\n            <li class="taskboard-stage">\n              <header class="taskboard-stage-header">\n                <div class="taskboard-stage-actions float-right">\n                  <div class="dropdown">\n                    <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-chevron-down" aria-hidden="true"></i></a>\n                    <div class="dropdown-menu bullet" role="menu">\n                      <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Rename</a>\n                      <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a>\n                        <div class="taskboard-stage-rename-wrap">\n                          <div class="form-group">\n                            <input class="form-control taskboard-stage-rename-input" type="text" value="' + title + '" name="name">\n                          </div>\n                          <button class="btn btn-primary btn-block taskboard-stage-rename-save" type="button">Save</button>\n                        </div>\n                    </div>\n                  </div>\n                </div>\n                <h5 class="taskboard-stage-title">' + title + '</h5>\n              </header>\n              <div class="taskboard-stage-content">\n                <ul class="list-group taskboard-list"></ul>\n                <div class="action-wrap">\n                  <a class="add-item-toggle" href="#"><i class="icon wb-plus" aria-hidden="true"></i>Add Task</a>\n                    <div class="add-item-wrap">\n                      <form class="add-item" role="form" method="post" action="#">\n                        <div class="form-group">\n                          <label class="form-control-label mb-15" for="name">Task name:</label>\n                          <input class="form-control" type="text" placeholder="Task name" name="name">\n                        </div>\n                        <div class="form-group text-right">\n                          <a class="btn btn-sm btn-white add-item-cancel">Cancel</a>\n                          <button type="button" class="btn btn-primary add-item-add">Add</button>\n                        </div>\n                      </form>\n                    </div>\n                </div>\n              </div>\n            </li>\n           ' } }, { key: "bindStageDropdownArrow", value: function () { this.$stageDropdownArrow.on("click", function () { $(this)
                            .next(".dropdown-menu")
                            .removeClass("is-edit") }) } }, { key: "bindRenameBtn", value: function () { this.$renameBtn.on("click", function (e) { var $header = $(this)
                            .closest(".taskboard-stage-header")
                            , $menu = $(this)
                            .closest(".dropdown-menu")
                            , $input = $(".taskboard-stage-rename-input", $menu)
                            , $title = $(".taskboard-stage-title", $header);
                        $menu.toggleClass("is-edit"), $input.val("")
                            .focus()
                            .val($title.html()), e.stopPropagation() }) } }, { key: "bindRenameSaveBtn", value: function () { this.$renameSaveBtn.on("click", function () { var $header = $(this)
                            .closest(".taskboard-stage-header")
                            , $input = $(".taskboard-stage-rename-input", $header)
                            , $title = $(".taskboard-stage-title", $header)
                            , value = $input.val();
                        0 !== value.length && $title.html(value) }) } }, { key: "bindDeleteBtn", value: function () { this.$deleteBtn.on("click", function () { var $this = $(this);
                        bootbox.dialog({ message: "Do you want to delete the stage?", buttons: { success: { label: "Delete", className: "btn-danger", callback: function () { $this.closest(".taskboard-stage")
                                            .remove() } } } }) }) } }]), Stage }()
        , TaskList = function () {
            function TaskList($el, data) { babelHelpers.classCallCheck(this, TaskList), this.$el = $el, this.data = data, this.render(), this.$el.sortable({ connectWith: ".taskboard-stage .list-group" }), this.$wrap = this.$el.parent()
                    .find(".action-wrap"), this.$addItemToggle = this.$wrap.find(".add-item-toggle"), this.bindAddItemToggle(), this.$addItemBtn = this.$wrap.find(".add-item-add"), this.bindAddItemBtn(), this.$cancelBtn = this.$wrap.find(".add-item-cancel"), this.bindCancelBtn(), this.bindTaskInput(), this.handleOpenSlidePanel() } return babelHelpers.createClass(TaskList, [{ key: "add", value: function () { var task = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}; if (task instanceof Task) this.$el.append(task.$el);
                    else { var taskObj = this.createTask(task);
                        taskObj.$el.data("taskInfo", task), this.add(taskObj) } } }, { key: "createTask", value: function (data) { return new Task(data) } }, { key: "render", value: function () { var length = this.data.length; if (0 !== length)
                        for (var i = 0; i < length; i++) { var task = this.createTask(this.data[i]);
                            task.$el.data("taskInfo", this.data[i]), this.add(task) } } }, { key: "bindAddItemToggle", value: function () { var _this2 = this;
                    this.$addItemToggle.on("click", function () { var $input = $('[name="name"]', _this2.$wrap);
                        _this2.$wrap.toggleClass("action-open"), $input.val("") }), this.$wrap.on("click.add-item", ".form-control-label", function (e) { _this2.$wrap.removeClass("action-open"), _this2.$el.off("click.add-item") }) } }, { key: "bindAddItemBtn", value: function () { var _this3 = this;
                    this.$addItemBtn.on("click", function () { var $input = $('[name="name"]', _this3.$wrap)
                            , taskData = { status: !1, title: "", description: "", priority: "normal", duedate: "", members: [], subtasks: [], attachments: [], comments: [] };
                        0 !== $input.val()
                            .length && (taskData.title = $input.val(), _this3.add(taskData)), _this3.$wrap.toggleClass("action-open") }) } }, { key: "bindCancelBtn", value: function () { var self = this;
                    this.$cancelBtn.on("click", function () { self.$wrap.toggleClass("action-open") }) } }, { key: "bindTaskInput", value: function () { this.$el.on("click", ".checkbox-custom input", function (e) { var $this = $(this)
                            , $target = $this.closest(".list-group-item")
                            , taskData = $target.data("taskInfo");
                        taskData.complete = $this.prop("checked"), $target.data("taskInfo", taskData), e.stopPropagation() }) } }, { key: "openSlidePanel", value: function (jsonObj, showOptions) { void 0 !== $.slidePanel && slidePanel.show(jsonObj, showOptions) } }, { key: "handleOpenSlidePanel", value: function () { var self = this
                        , options = $.extend({}, slidePanel.defaults, slidePanel.defaultsOptions);
                    this.$el.on("click", '[data-taskboard="slidePanel"]', function (e) { var $target = $(e.target)
                            .closest(".list-group-item")
                            , jsonData = { url: $(this)
                                    .data("url"), target: $target };
                        self.openSlidePanel(jsonData, options), e.stopPropagation() }) } }]), TaskList }()
        , slidePanel = { defaults: Plugin.getDefaults("slidePanel"), defaultsOptions: { template: function (options) { return '\n          <div class="' + options.classes.base + "  " + options.classes.base + "-" + options.direction + '">\n            <div class="' + options.classes.base + '-scrollable"><div>\n            <div class="' + options.classes.content + '"></div>\n            </div></div>\n            <div class="' + options.classes.base + '-handler"></div>\n          </div>\n          ' }, afterLoad: function (object) { var _this = this
                        , info = $(object.target)
                        .data("taskInfo");
                    this.$panel.find("." + this.options.classes.base + "-scrollable")
                        .asScrollable({ namespace: "scrollable", contentSelector: ">", containerSelector: ">" }), this.$panel.find("#task-description")
                        .markdown(), void 0 !== info && info.duedate.length > 0 && this.$panel.find("#taskDatepicker")
                        .data("date", info.duedate), this.$panel.find("#taskDatepicker")
                        .datepicker({ autoclose: !1, todayHighlight: !0 })
                        .on("changeDate", function () { $("#taskDatepickerInput")
                                .val(_this.$panel.find("#taskDatepicker")
                                    .datepicker("getFormattedDate")) }), this.$panel.data("slidePanel", object), $(document)
                        .off("click.slidePanelDatepicker"), $(document)
                        .on("click.slidePanelDatepicker", "span, td, th", function (e) { e.stopPropagation() }) }, afterShow: function () { var self = this;
                    $(document)
                        .on("click.slidePanelShow", function (e) { 0 === $(e.target)
                                .closest(".slidePanel")
                                .length && 1 === $(e.target)
                                .closest("body")
                                .length && self.hide() }) }, afterHide: function () { $(document)
                        .off("click.slidePanelShow"), $(document)
                        .off("click.slidePanelDatepicker") }, contentFilter: function (data, object) { var $checked = void 0
                        , $panel = $(data)
                        , $target = $(object.target)
                        , info = $target.data("taskInfo")
                        , $stage = $target.closest(".taskboard-stage"); switch ($(".stage-name", $panel)
                        .html($(".taskboard-stage-title", $stage.html())), $(".task-title", $panel)
                        .html(info.title), info.priority) {
                    case "high":
                        $checked = $("#priorityHigh", $panel); break;
                    case "urgent":
                        $checked = $("#priorityUrgent", $panel); break;
                    default:
                        $checked = $("#priorityNormal", $panel) } if ($checked.prop("checked", !0), slidePanel.handleSelective($('[data-plugin="jquery-selective"]', $panel), info.members), 0 === info.description.length ? $(".description", $panel)
                        .addClass("is-empty") : $(".description-content", $panel)
                        .html(info.description), 0 !== info.subtasks.length) { for (var length = info.subtasks.length, i = 0; i < length; i++) { var $subtask = $(slidePanel.subtaskTpl(info.subtasks[i]));
                            $(".subtasks-list", $panel)
                                .append($subtask) } $(".subtasks", $panel)
                            .toggleClass("is-show") } if (0 !== info.attachments.length) { for (var _length = info.attachments.length, _i = 0; _i < _length; _i++) { var $attachment = $(slidePanel.attachmentTpl(info.attachments[_i]));
                            $(".attachments-list", $panel)
                                .append($attachment) } $(".attachments", $panel)
                            .toggleClass("is-show") } if (0 !== info.comments.length)
                        for (var _length2 = info.comments.length, _i2 = 0; _i2 < _length2; _i2++) { var $comment = $(slidePanel.commentTpl(info.comments[_i2].src, info.comments[_i2].user, info.comments[_i2].time, info.comments[_i2].content));
                            $(".comments-history", $panel)
                                .append($comment) }
                    return $panel } }, handleSelective: function ($target, selected) { var getSelected = function () { var _this = this
                            , arr = []; return $.each(this._options.getOptions(this), function (n, option) { $.each(_this.options.local, function (i, user) { user.id === $(option)
                                    .val() && arr.push(user) }) }), arr }
                    , members = [{ id: "uid_1", name: "Herman Beck", img: "../../../global/portraits/1.jpg" }, { id: "uid_2", name: "Mary Adams", img: "../../../global/portraits/2.jpg" }, { id: "uid_3", name: "Caleb Richards", img: "../../../global/portraits/3.jpg" }, { id: "uid_4", name: "June Lane", img: "../../../global/portraits/4.jpg" }, { id: "uid_5", name: "Edward Fletcher", img: "../../../global/portraits/5.jpg" }, { id: "uid_6", name: "Crystal Bates", img: "../../../global/portraits/6.jpg" }];
                $target.selective({ namespace: "addMember", local: members, selected: selected, buildFromHtml: !1, tpl: { optionValue: function (data) { return data.id }, frame: function () { return '<div class="' + this.namespace + '">\n            ' + this.options.tpl.items.call(this) + '\n            <div class="' + this.namespace + '-trigger">\n            ' + this.options.tpl.triggerButton.call(this) + '\n            <div class="' + this.namespace + '-trigger-dropdown">\n            ' + this.options.tpl.list.call(this) + "\n            </div>\n            </div>\n            </div>" }, triggerButton: function () { return '<div class="' + this.namespace + '-trigger-button"><i class="wb-plus"></i></div>' }, listItem: function (data) { return '<li class="' + this.namespace + '-list-item"><img class="avatar" src="' + data.img + '">' + data.name + "</li>" }, item: function (data) { return '<li class="' + this.namespace + '-item"><img class="avatar" src="' + data.img + '">\n            ' + this.options.tpl.itemRemove.call(this) + "\n            </li>" }, itemRemove: function () { return '<span class="' + this.namespace + '-remove"><i class="wb-minus-circle"></i></span>' }, option: function (data) { return '<option value="' + this.options.tpl.optionValue.call(this, data) + '">' + data.name + "</option>" } }, onAfterItemAdd: function () { var $target = this.$element.closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , arr = getSelected.call(this)
                            , taskData = $target.data("taskInfo");
                        taskData.members = arr, $target.data("taskInfo", taskData); var $memberList = $target.find(".task-members");
                        new MemberList($memberList, arr) }, onAfterItemRemove: function () { var $target = this.$element.closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , arr = getSelected.call(this)
                            , taskData = $target.data("taskInfo");
                        taskData.members = arr, $target.data("taskInfo", taskData); var $memberList = $target.find(".task-members");
                        new MemberList($memberList, arr) } }) }, subtaskTpl: function (data) { return '\n            <li class="list-group-item subtask">\n              <div class="checkbox-custom checkbox-primary">\n                <input type="checkbox" ' + (data.complete ? 'checked="checked"' : "") + ' name="checkbox">\n                <label class="title">' + data.title + '</label>\n              </div>\n              <div class="subtask-editor">\n                <form>\n                  <div class="form-group">\n                    <input class="form-control subtask-title" type="text" name="title">\n                  </div>\n                  <div class="form-group">\n                    <button class="btn btn-primary subtask-editor-save" type="button">Save</button>\n                    <a class="btn btn-sm btn-white subtask-editor-delete" href="javascript:void(0)">Delete</a>\n                  </div>\n                </form>\n              </div>\n            </li>\n           ' }, attachmentTpl: function (data) { return '\n            <li class="list-group-item">\n              <div class="meida">\n                <div class="pr-20">\n                  <div class="attachments-image">\n                    <img src="' + data.src + '">\n                  </div>\n                </div>\n                <div class="media-body">\n                  <p><span class="name">' + data.title + '</span><span</p>\n                  <p>\n                    <span class="size">' + data.size + '</span>\n                    <span class="attachments-actions">\n                      <button class="btn btn-icon btn-pure" type="button">\n                        <i class="icon wb-download" aria-hidden="true"></i>\n                      </button>\n                      <button class="btn btn-icon btn-pure" type="button">\n                         <i class="icon wb-trash" aria-hidden="true"></i>\n                      </button>\n                    </span>\n                  </p>\n                </div>\n              </div>\n            </li>\n           ' }, commentTpl: function (src, user, time, content) { return '\n            <div class="comment media">\n              <div class="pr-20">\n                <a class="avatar avatar-lg" href="javascript:void(0)">\n                  <img src="' + src + '" alt="...">\n                </a>\n              </div>\n              <div class="media-body">\n                <div class="comment-body">\n                  <a class="comment-author" href="javascript:void(0)">' + user + '</a>\n                  <div class="comment-meta">\n                    <span class="date">' + time + '</span>\n                  </div>\n                <div class="comment-content"><p>' + content + "</p></div>\n              </div>\n            </div>\n           " }, handlePriority: function () { $(document)
                    .on("click", '[name="priorities"]', function () { var $this = $(this)
                            , $target = $this.closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , taskData = $target.data("taskInfo");
                        taskData.priority = $this.data("priority"), $target.data("taskInfo", taskData), $target.removeClass("priority-normal priority-high priority-urgent")
                            .addClass("priority-" + $target.data("taskInfo")
                                .priority) }) }, handleDeleteTask: function () { $(document)
                    .on("click", ".taskboard-task-delete", function () { var $this = $(this);
                        bootbox.dialog({ message: "Do you want to delete the task?", buttons: { success: { label: "Delete", className: "btn-danger", callback: function () { $this.closest(".slidePanel")
                                            .data("slidePanel")
                                            .target.remove(), $(".slidePanel-close")
                                            .trigger("click") } } } }) }) }, handleEditor: function () { $(document)
                    .on("click", ".slidePanel .task-title, .taskboard-task-edit, .description-toggle", function () { var $this = $(this)
                            , data = $this.closest(".slidePanel")
                            .data("slidePanel")
                            .target.data("taskInfo");
                        $("#task-title")
                            .val(data.title), $("#task-description")
                            .val(data.description), $this.closest(".slidePanel")
                            .find(".task-main")
                            .addClass("is-edit") }), $(document)
                    .on("click", ".task-main-editor-save", function () { var $this = $(this)
                            , $target = $this.closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , taskData = $target.data("taskInfo");
                        taskData.title = $("#task-title")
                            .val(), taskData.description = $("#task-description")
                            .val(), $target.data("taskInfo", taskData), $(".task-title", $target)
                            .html($target.data("taskInfo")
                                .title), $(".slidePanel .task-title")
                            .html($target.data("taskInfo")
                                .title), $(".slidePanel .description-content")
                            .html($target.data("taskInfo")
                                .description), $this.closest(".slidePanel")
                            .find(".task-main")
                            .removeClass("is-edit"), 0 === $("#task-description")
                            .val()
                            .length ? $(".description")
                            .addClass("is-empty") : $(".description")
                            .removeClass("is-empty") }), $(document)
                    .on("click", ".task-main-editor-cancel", function () { $(this)
                            .closest(".slidePanel")
                            .find(".task-main")
                            .removeClass("is-edit") }) }, handleSubtasks: function () { var self = this;
                $(document)
                    .on("click", ".subtask-toggle", function () { var length = $(".subtask")
                            .length
                            , $input = $(".subtasks-add .subtask-title")
                            , $subtasks = $(".subtasks");
                        $input.val(""), 0 === length && $subtasks.addClass("is-show"), $subtasks.addClass("is-edit"), $input.focus(), $(document)
                            .on("click.subtask-add", function (e) { 0 === $(e.target)
                                    .closest($(".subtasks-add"))
                                    .length && ($subtasks.removeClass("is-edit"), $(document)
                                        .off("click.subtask-add")) }) }), $(document)
                    .on("click", ".subtask-add-save", function () { var $input = $(".subtasks-add .subtask-title")
                            , $subtasks = $(".subtasks")
                            , $target = $(this)
                            .closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , length = $(".subtask")
                            .length
                            , taskData = $target.data("taskInfo")
                            , value = $input.val(); if (0 === value.length) 0 === length && $subtasks.removeClass("is-show");
                        else { var data = { title: value, complete: !1 }
                                , $subtask = $(self.subtaskTpl(data));
                            $(".subtasks-list")
                                .append($subtask), taskData.subtasks[length] = data, $target.data("taskInfo", taskData); var $badgeList = $target.find(".task-badges");
                            new BadgeList($badgeList, $target.data("taskInfo")) } $input.val("")
                            .focus() }), $(document)
                    .on("click", ".subtask-add-cancel", function () { $(".subtasks")
                            .removeClass("is-edit"), $(document)
                            .off("click.subtask-add") }), $(document)
                    .on("click", ".subtask input", function () { var $this = $(this)
                            , $subtask = $this.closest(".subtask")
                            , $target = $this.closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , index = $subtask.index()
                            , taskData = $target.data("taskInfo");
                        taskData.subtasks[index].complete = $this.prop("checked"), $target.data("taskInfo", taskData); var $badgeList = $target.find(".task-badges");
                        new BadgeList($badgeList, $target.data("taskInfo")) }), $(document)
                    .on("click", ".subtask .title", function () { var $this = $(this)
                            , $subtask = $this.closest(".subtask")
                            , data = $this.closest(".slidePanel")
                            .data("slidePanel")
                            .target.data("taskInfo")
                            , index = $subtask.index()
                            , $input = $(".subtask-title", $subtask);
                        $subtask.addClass("is-edit"), $input.val("")
                            .focus()
                            .val(data.subtasks[index].title), $(document)
                            .on("click.subtask", function (e) { 0 === $(e.target)
                                    .closest($subtask)
                                    .length && ($subtask.removeClass("is-edit"), $(document)
                                        .off("click.subtask")) }) }), $(document)
                    .on("click", ".subtask-editor-save", function () { var $this = $(this)
                            , $subtask = $this.closest(".subtask")
                            , $target = $this.closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , index = ($target.data("taskInfo"), $subtask.index())
                            , taskData = $target.data("taskInfo");
                        taskData.subtasks[index].title = $(".subtask-title", $subtask)
                            .val(), $target.data("taskInfo", taskData), $(".title", $(".subtasks-list .subtask")[index])
                            .html($(".subtask-title", $subtask)
                                .val()), $subtask.removeClass("is-edit"), $(document)
                            .off("click.subtask") }), $(document)
                    .on("click", ".subtask-editor-delete", function (e) { var $this = $(this);
                        bootbox.dialog({ message: "Do you want to delete the subtask?", buttons: { success: { label: "Delete", className: "btn-danger", callback: function () { var $subtask = $this.closest(".subtask")
                                            , $target = $this.closest(".slidePanel")
                                            .data("slidePanel")
                                            .target
                                            , index = ($target.data("taskInfo"), $subtask.index())
                                            , taskData = $target.data("taskInfo");
                                        taskData.subtasks.splice(index, 1), $target.data("taskInfo", taskData); var $badgeList = $target.find(".task-badges");
                                        new BadgeList($badgeList, $target.data("taskInfo"));
                                        $subtask.remove(), $(document)
                                            .off("click.subtask"), 0 === $(".subtask")
                                            .length && $(".subtasks")
                                            .removeClass("is-show") } } } }) }) }, handleDatepicker: function () { $(document)
                    .on("click", ".due-date-save", function () { var $target = $(this)
                            .closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , taskData = $target.data("taskInfo")
                            , value = $("#taskDatepickerInput")
                            .val(); if (value.length > 0) { taskData.duedate = value, $target.data("taskInfo", taskData); var $badgeList = $target.find(".task-badges");
                            new BadgeList($badgeList, $target.data("taskInfo")) } }), $(document)
                    .on("click", ".due-date-delete", function () { var $target = $(this)
                            .closest(".slidePanel")
                            .data("slidePanel")
                            .target
                            , taskData = $target.data("taskInfo"); if (0 !== taskData.duedate.length) { taskData.duedate = "", $target.data("taskInfo", taskData); var $badgeList = $target.find(".task-badges");
                            new BadgeList($badgeList, $target.data("taskInfo"));
                            $("#taskDatepicker")
                                .datepicker("clearDates") } }) }, handleAttachment: function () { $(document)
                    .on("click", "#fileuploadToggle", function () { $("#fileupload")
                            .trigger("click") }) }, show: function (jsonObj, showOptions) { $.slidePanel.show(jsonObj, showOptions) } }
        , Task = function () {
            function Task(data) { babelHelpers.classCallCheck(this, Task), this.$el = null, this.data = data, this.$taskBages = null, this.$taskMembers = null, this.badgeList = null, this.memberList = null, this.render(this.once) } return babelHelpers.createClass(Task, [{ key: "render", value: function () { this.$el = $(this.getTpl(this.data)), this.$taskBages = this.$el.find(".task-badges"), this.badgeList = new BadgeList(this.$taskBages, this.data), this.data.members.length > 0 && (this.$taskMembers = this.$el.find(".task-members"), this.memberList = new MemberList(this.$taskMembers, this.data.members)) } }, { key: "getTpl", value: function (data) { var checkedString = data.complete ? 'checked="checked"' : ""; return '\n            <li class="list-group-item priority-' + data.priority + '" data-taskboard="slidePanel" data-url="panel.tpl">\n              <div class="checkbox-custom checkbox-primary">\n                <input type="checkbox" ' + checkedString + ' name="checkbox">\n                <label class="task-title">' + data.title + '</label>\n              </div>\n              <div class="w-full">\n                <div class="task-badges"></div>\n                <ul class="task-members">\n                  <li><img class="avatar avatar-sm" src="../../../global/portraits/5.jpg"></li>\n                </ul>\n              </div>\n            </li>\n           ' } }]), Task }()
        , BadgeList = function () {
            function BadgeList($el, data) { babelHelpers.classCallCheck(this, BadgeList), this.$el = $el, this.data = data, this.render() } return babelHelpers.createClass(BadgeList, [{ key: "add", value: function (badge) { this.$el.append(badge.$el) } }, { key: "render", value: function () { var _duedateData$subtasks = { duedateData: this.data.duedate, subtasksData: this.data.subtasks, attachmentsData: this.data.attachments, commentsData: this.data.comments }
                        , duedateData = _duedateData$subtasks.duedateData
                        , subtasksData = _duedateData$subtasks.subtasksData
                        , attachmentsData = _duedateData$subtasks.attachmentsData
                        , commentsData = _duedateData$subtasks.commentsData; if (this.$el.children()
                        .remove(), duedateData.length > 0) { var duedate = new Duedate(duedateData);
                        this.add(duedate) } if (subtasksData.length > 0) { var subtasks = new Subtask(subtasksData);
                        this.add(subtasks) } if (attachmentsData.length > 0) { var attachments = new Attachment(attachmentsData);
                        this.add(attachments) } if (commentsData.length > 0) { var comments = new Comment(commentsData);
                        this.add(comments) } } }]), BadgeList }()
        , Duedate = function () {
            function Duedate(data) { babelHelpers.classCallCheck(this, Duedate), this.data = data, this.$el = null, this.render() } return babelHelpers.createClass(Duedate, [{ key: "render", value: function () { this.$el = $(this.getTpl(this.data.split(/\//, 2)
                        .join("/"))) } }, { key: "getTpl", value: function (content) { return '<span class="task-badge task-badge-subtask icon wb-calendar">' + content + "</span>" } }]), Duedate }()
        , Subtask = function () {
            function Subtask(data) { babelHelpers.classCallCheck(this, Subtask), this.data = data, this.$el = null, this.render() } return babelHelpers.createClass(Subtask, [{ key: "render", value: function () { var length = this.data.length; if (length > 0) { for (var num = 0, i = 0; i < length; i++) this.data[i].complete && num++;
                        this.$el = $(this.getTpl(num + "/" + length)) } } }, { key: "getTpl", value: function (content) { return '<span class="task-badge task-badge-subtask icon wb-list-bulleted">' + content + "</span>" } }]), Subtask }()
        , Attachment = function () {
            function Attachment(data) { babelHelpers.classCallCheck(this, Attachment), this.data = data, this.$el = null, this.render() } return babelHelpers.createClass(Attachment, [{ key: "render", value: function () { this.data.length > 0 && (this.$el = $(this.getTpl(this.data.length))) } }, { key: "getTpl", value: function (content) { return '<span class="task-badge task-badge-attachments icon wb-paperclip">' + content + "</span>" } }]), Attachment }()
        , Comment = function () {
            function Comment(data) { babelHelpers.classCallCheck(this, Comment), this.data = data, this.$el = null, this.render() } return babelHelpers.createClass(Comment, [{ key: "render", value: function () { this.data.length > 0 && (this.$el = $(this.getTpl(this.data.length))) } }, { key: "getTpl", value: function (content) { return '<span class="task-badge task-badge-comments icon wb-chat">' + content + "</span>" } }]), Comment }()
        , MemberList = function () {
            function MemberList($el, data) { babelHelpers.classCallCheck(this, MemberList), this.$el = $el, this.data = data, this.render() } return babelHelpers.createClass(MemberList, [{ key: "createMember", value: function (data) { return new Member(data) } }, { key: "add", value: function () { var member = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}; if (member instanceof Member) this.$el.append(member.$el);
                    else { var memberObj = this.createMember(member);
                        this.add(memberObj) } } }, { key: "render", value: function () { if (this.$el.children()
                        .remove(), 0 !== this.data.length)
                        for (var length = this.data.length, i = 0; i < length; i++) this.add(this.data[i]) } }]), MemberList }()
        , Member = function () {
            function Member(data) { babelHelpers.classCallCheck(this, Member), this.data = data, this.$el = null, this.render() } return babelHelpers.createClass(Member, [{ key: "render", value: function () { this.$el = $(this.getTpl(this.data.img)) } }, { key: "getTpl", value: function (src) { return '<li><img class="avatar avatar-sm" src="' + src + '"></li>' } }]), Member }()
        , AppTaskboard = function (_Site) {
            function AppTaskboard() { return babelHelpers.classCallCheck(this, AppTaskboard), babelHelpers.possibleConstructorReturn(this, (AppTaskboard.__proto__ || Object.getPrototypeOf(AppTaskboard))
                    .apply(this, arguments)) } return babelHelpers.inherits(AppTaskboard, _Site), babelHelpers.createClass(AppTaskboard, [{ key: "initialize", value: function () { babelHelpers.get(AppTaskboard.prototype.__proto__ || Object.getPrototypeOf(AppTaskboard.prototype), "initialize", this)
                        .call(this), this.$taskboard = $("#taskboardStages"), this.stageList = null, this.createStageList(), this.$floatBtn = $(".site-floataction"), this.$model = $("#addStageFrom"), this.$stageCreateBtn = this.$model.find("#taskboardStageCreat") } }, { key: "process", value: function () { babelHelpers.get(AppTaskboard.prototype.__proto__ || Object.getPrototypeOf(AppTaskboard.prototype), "process", this)
                        .call(this), this.bindFloatBtn(), this.bindStageCreateBtn(), this.handleSlidePandelAction() } }, { key: "createStageList", value: function () { var _this5 = this
                        , assets = Config.get("assets");
                    $.getJSON(assets + "/data/taskboard.json", function (data) { _this5.stageList = new StageList(_this5.$taskboard, data) }) } }, { key: "bindFloatBtn", value: function () { var _this6 = this;
                    this.$floatBtn.on("click", function () { $("input", _this6.$model)
                            .val(""), $("option:first", $("select", _this6.$model))
                            .prop("selected", "selected") }) } }, { key: "bindStageCreateBtn", value: function () { var _this7 = this;
                    this.$stageCreateBtn.on("click", function () { var stageData = { title: $('[name="name"]', _this7.$model)
                                .val(), tasks: [] };
                        _this7.stageList.add(stageData) }) } }, { key: "handleSlidePandelAction", value: function () { slidePanel.handlePriority(), slidePanel.handleSubtasks(), slidePanel.handleDatepicker(), slidePanel.handleEditor(), slidePanel.handleDeleteTask(), slidePanel.handleAttachment() } }]), AppTaskboard }(_Site3.default)
        , instance = null;
    exports.default = AppTaskboard, exports.AppTaskboard = AppTaskboard, exports.run = function () { getInstance()
            .run() }, exports.getInstance = getInstance });
