

$('.btn-number').click(function(e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function() {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function(e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});

// Date picker
$('#datepicker1').attr('autocomplete', 'off');
$('#datepicker2').attr('autocomplete', 'off');
$('#datepicker1').datepicker({
    changeMonth: false,
    minDate: 0,
    numberOfMonths: 1,
    dateFormat: 'yy-mm-dd',
    onSelect: function(selected) {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
        minValue.setDate(minValue.getDate() + 1);
        $('#datepicker2').datepicker("option", "minDate", minValue);
    }

});
$('#datepicker2').datepicker({
    changeMonth: false,
    minDate: 0,
    dateFormat: 'yy-mm-dd',
    numberOfMonths: 1

});
$('#datepicker').datepicker({
    changeMonth: false,
    minDate: 0,
    dateFormat: 'yy-mm-dd',
    numberOfMonths: 1

});


$('#datepicker_multi1').datepicker({
    changeMonth: false,
    minDate: 0,
    dateFormat: 'yy-mm-dd',
    numberOfMonths: 1

});
$('#datepicker_multi2').datepicker({
    changeMonth: false,
    minDate: 0,
    dateFormat: 'yy-mm-dd',
    numberOfMonths: 1

});
$('#datepicker_multi3').datepicker({
    changeMonth: false,
    minDate: 0,
    dateFormat: 'yy-mm-dd',
    numberOfMonths: 1

});
// $('#datepicker').datepicker({
// 	uiLibrary: 'bootstrap4',
// 	format: "dd-mm-yyyy"
// });
// $('#datepicker1').datepicker({
// 	uiLibrary: 'bootstrap4',
// 	format: "dd-mm-yyyy",
// 	todayBtn: 1

// }).on('changeDate', function (selected) {
// 	alert();
// 	var minDate = new Date(selected.date.valueOf());
// 	$('#datepicker2').datepicker('setStartDate', minDate);
// });


// $('#datepicker2').datepicker({
// 	uiLibrary: 'bootstrap4',
// 	format: "dd-mm-yyyy",
// }).on('changeDate', function (selected) {

// 	var maxDate = new Date(selected.date.valueOf());
// 	$('#datepicker1').datepicker('setEndDate', maxDate);
// });;



// Accordian    

function toggleIcon(e) {
    $(e.target)
        .prev('.accordion-heading')
        .find(".more-less")
        .toggleClass('mdi mdi-plus mdi mdi-minus');
}
$('.accordion-group').on('hidden.bs.collapse', toggleIcon);
$('.accordion-group').on('shown.bs.collapse', toggleIcon);


$(function() {
    $.widget("custom.catcomplete", $.ui.autocomplete, {
        _create: function() {
            this._super();
            this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
        },
        _renderMenu: function(ul, items) {
            var that = this,
                currentCategory = "";
            $.each(items, function(index, item) {
                var li;
                if (item.category != currentCategory) {
                    ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
                    currentCategory = item.category;
                }
                li = that._renderItemData(ul, item);
                if (item.category) {
                    li.attr("aria-label", item.category + " : " + item.label);
                }
            });
        }
    });
    var d = new Date(90, 0, 1);
    $(".adultDob").datepicker({
        defaultDate: d,
        changeYear: true,
        yearRange: "-65:-13",
        dateFormat: "dd-mm-yy"
    });
    var ch = new Date(2010, 0, 1);
    $(".childDob").datepicker({
        changeYear: true,
        defaultDate: ch,
        yearRange: "-14:-2",
        dateFormat: "dd-mm-yy"
    });
    var sn = new Date(1940, 0, 1);
    $(".seniorDob").datepicker({
        changeYear: true,
        defaultDate: sn,
        yearRange: "-90:-66",
        dateFormat: "dd-mm-yy"
    });
    var inf = new Date();
    $(".infantDob").datepicker({
        changeYear: true,
        defaultDate: inf,
        yearRange: "-1:-0",
        dateFormat: "dd-mm-yy"
    });



});