function aplsTabsAddClickEvent() {
    $(".apls-tabs-wrapper .apls-tabs-name-area .apls-tab-name").click(function () {
        var tabId = $(this).attr("tabId");
        var tabsWrapperId = $(this).attr("tabsWrapperId");
        var tabFunction = $(this).attr("tabFunction");
        aplsTabsOpenTab(tabId,tabsWrapperId,tabFunction,this);
    });
    $(".apls-tabs-wrapper .apls-tab-content").hide();
    $(".apls-tabs-wrapper .apls-tab-content:first-child").show();
    $(".apls-tabs-wrapper .apls-tab-name:first-child").addClass("open-tab");
    var opentab =  $(".apls-tabs-wrapper .apls-tab-name:first-child");
    var tabFunction = $(opentab).attr("tabFunction");
    if(typeof tabFunction !== 'undefined') {
        eval(tabFunction + '(opentab)');
    }
}

function aplsTabsOpenTab(tabId,tabsWrapperId,tabFunction,obj) {
    $("#" + tabsWrapperId + " .apls-tab-name").removeClass("open-tab");
    $("#" + tabsWrapperId + " #" + tabId + "-NAME").addClass("open-tab");
    $("#" + tabsWrapperId + " .apls-tab-content").hide();
    $("#" + tabsWrapperId + " #" + tabId + "-CONTENT").show();
    if(tabFunction !== '') {
        eval(tabFunction + '(obj)');
    }
}

$(document).ready(function () {
    aplsTabsAddClickEvent();
});