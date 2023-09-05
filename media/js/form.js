(function() {
    var suggestions = {

        init: function() {
            this.cacheDom();
            this.bindEvents();

            this.getLoader();

            var all_result = $(".result-right-set>ul>li").sort(function(a, b) {
                var contentA = parseFloat($(a).attr('data-price'));
                var contentB = parseFloat($(b).attr('data-price'));
                return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
            });


            $('.from-head').find("span").html($(".result-right-set>ul>li[data-nearby=1]:lt(3)")).show();
            $('.from-head').find("span").html($(".result-right-set>ul>li").length + " <small> Results found</small>");
            $(".result-right-set>ul").html(all_result);
            var $price = [];
            var nearBy = 0;
            $(".result-right-set>ul>li").each(function(i, val) {
                if ($(this).data('price') != undefined) {
                    $price.push($(this).data('price'));
                    if ($(this).data('nearby') == 1) {
                        nearBy++;
                    }
                }
            });
            if (nearBy == 0) {
                $('#nearBy').addClass("btn btn-dark");
                $('#nearBy').prop('disabled', true);
                $('#nearBy').attr("id", "nearByDisable");


            }

            var max_price = Math.max.apply(Math, $price);
            this.$uival = max_price;
            var min_price = Math.min.apply(Math, $price);
            suggestions.max = max_price;
            var curre = "$";



            this.$slider.slider({
                animate: true,
                value: 1,
                values: [Math.max.apply(Math, $price)],
                isRTL: true,
                min: Math.min.apply(Math, $price),
                max: Math.max.apply(Math, $price),
                step: -1,
                slide: function(event, ui) {
                    $('#slider span').html('<label><span class=""></span></label>');

                    var uival = parseFloat(ui.value) > parseFloat(Math.max.apply(Math, $price)) ? Math.max.apply(Math, $price) : (Math.round(ui.value) == Math.round(parseFloat(Math.max.apply(Math, $price)) - 1) ? parseFloat(Math.max.apply(Math, $price)) : ui.value);
                    $('.price-val').html(uival + "<small> $ </small><br><span class='float-left min_price'>" + min_price + " " + curre + " </span> <span class='float-right min_price'>" + max_price + " " + curre + "</span> ");
                    suggestions.update(1, uival);
                    suggestions.$uival = uival;
                }

            });

            $('.price-val').html(" Max  : " + max_price + " <small>" + curre + "</small><br><span class='float-left min_price'>" + min_price + " " + curre + " </span> <span class='float-right min_price'>" + max_price + " " + curre + "</span>");
        },
        update: function(minPrice, maxPrice) {

            $(".result-right-set>ul>li").hide().filter(function(e) {
                var price = parseInt($(this).data("price"));
                return price >= minPrice && price <= maxPrice;
            }).show();

            suggestions.min = minPrice;
            suggestions.max = maxPrice;

        },
        cacheDom: function() {

            this.$cache = {};
            this.$el = $("#searchForm");
            this.rightHotelResult = $('.result-right-set');
            this.$nearBy = $('#nearBy');
            this.$shortestBy = $('#shortestBy');
            this.$cheapest = $('#cheapest');
            this.$alternateDate = $('#alternateDate');
            this.topFilter = $('.sh-flt').parent();
            this.step1 = $('.step-block:nth-child(1)');
            this.step2 = $('.step-block:nth-child(2)');
            this.step3 = $('.step-block:nth-child(3)');
            this.next1 = $(".next1");
            this.next2 = $(".next2");
            this.showAll = $('#showall');
            this.$airline_check = $("input[name='checkbox']");
            //this.$alternateDate.hide();
            this.base = window.origin;
            this.$uival = 0;
            this.max = 0.0;
            this.$slider = $('#slider');
            this.min = 0.0;
            if (this.base === "http://192.168.1.16") {

                this.base = this.base + '/australia-travel/';
            } else {
                this.base = "http://horntravel.com.au/";
            }


        },

        bindEvents: function() {
            this.step1.on("click", this.gotoStep1.bind(this));
            this.step2.on("click", this.gotoStep2.bind(this));
            this.step3.on("click", this.gotoStep3.bind(this));
            this.next1.on("click", this.gotoStep2.bind(this));
            this.next2.on("click", this.gotoStep3.bind(this));
            this.showAll.on('click', this.showAllMethod.bind(this));
            this.$nearBy.on("click", this.getNearByAirport.bind(this));
            this.$shortestBy.on("click", this.getShortestFlight.bind(this));
            this.rightHotelResult.delegate("#selectKey", "click", this.selectRooms.bind(this));
            this.$cheapest.on("click", this.getCheapestFlight.bind(this));
            this.$alternateDate.on("click", this.getAlterNateFlight.bind(this));
            this.topFilter.on('click', this.filterByAirline.bind(this));
            $(".accordion-body").delegate('input[type="checkbox"]', 'change', this.filterAll.bind(this));
        },
        showAllMethod: function(e) {
            this.getLoader();
            this.topFilter.removeAttr('style');
            $.when($(".result-right-set>ul").find('li').show()).done(() => {
                $('.from-head').find("span").html($(".result-right-set>ul>li>.child_results").length + " <small> Results found</small>");
            });
        },
        selectRooms: function(e) {

            var key = $(e.target).data("ref");
            var key_val = $(e.target).data("ref");
            var adult = $(e.target).data("adult");
            var child = $(e.target).data("child");
            var age = $(e.target).data("age");

            //console.log(suggestions.base +"Home/selectRoom");
            console.log(suggestions.base);

            $.ajax({
                url: suggestions.base + "Hotel/selectRoom",
                type: 'POST',
                data: { key: key, adult: adult, child: child, age: age },
                beforeSend: function() {
                    $('.select-room').hide();
                    $(e.target).closest('.hotel-resul').siblings('.select-room').css("border", "none").show();
                    $(e.target).closest('.hotel-resul').siblings('.select-room').css("border", "#b9b9b9 1px solid;").html(`<div style="background: url('${suggestions.base}frontend/img/download.gif');height:10px" class="head-st">  </div>`);


                },
                success: function(data, textStatus, jqXHR) {
                    var parseData = $.parseJSON(data);
                    var parsedData = parseData["response"];
                    var roomData = "";
                    var adult = JSON.stringify(parseData["adult"]);
                    var child = JSON.stringify(parseData["child"]);
                    var age = JSON.stringify(parseData["age"]);

                    if (parsedData == undefined) {
                        roomData = `<div class="head-st">
                                            <h2 style="text-align: center">No room data available</h2>
                                    </div>`;
                    } else if (parsedData.HotelPriceCheckRS.PriceCheckInfo.HotelRateInfo.Rooms.Room) {
                        var rooms = "";
                        $.each(parsedData.HotelPriceCheckRS.PriceCheckInfo.HotelRateInfo.Rooms.Room, function(key, val) {
                            var des = val.RoomDescription.Text[0];
                            rooms += ` <li>  <div class="row">
                                              <div class="col-md-9">
                                                        <div class="hot-dtls">
                                                            <div class="hotel-name">
                                                                <h2 title="${val.RoomDescription.Text[0]}">${val.RoomDescription.Name}  </h2>
                                                             <span class="addre"><i class="fa fa-map-info" aria-hidden="true"></i> ${des}</span>
                                                               <!--    <span class="dist"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 16 km from center</span>-->
                                                            </div>

                                                  

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="hot-right-dtl">
                                                             
                                                            <div class="hot-price">
                                                                
                                                                <span data-key="" class="real-pc">${val.RatePlans.RatePlan[0].RateInfo.AverageNightlyRate}</span>
                                                                <small class="price-info"> per night</small>
                                                            </div>

                                                            <div class="check-avi-btn">
                                                                <button data-adult='${adult}'   onclick="selectRoom(this)" data-child='${child}' data-age='${age}' data-booking="" data-hotel="${parsedData.HotelPriceCheckRS.PriceCheckInfo.HotelInfo.SabreHotelCode}" data-room="" data-key="${parsedData.HotelPriceCheckRS.PriceCheckInfo.HotelRateInfo.RateInfos.RateInfo[0].RateKey}">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </li>`;
                        });


                        roomData += `<div class="head-st">
                                            <h2>Select Room Type</h2>
                                        </div>
                                        <ul>
                                           ${rooms}
                                        </ul>`;
                    }
                    $(e.target).closest('.hotel-resul').siblings('.select-room').removeAttr("style").html(roomData);
                }
            })
        },
        filterByAirline: function(e) {

            var filter = $(e.target).closest('td').data('code');
            this.topFilter.removeAttr('style');
            $(e.target).closest('td').css({
                'background-color': 'rgb(206, 206, 206)'
            })
            this.getLoader();
            var $filteredResults = $(".result-right-set>ul>li>.child_results").find(".fight-detail-show");

            $filteredResults = $filteredResults.filter(function() {
                var matched = false,
                    currentFilterValues = [$(this).data('airline').toString()];
                $.each(currentFilterValues, function(_, currentFilterValue) {
                    if (currentFilterValue == filter) {
                        matched = true;
                        return false;
                    }
                });
                return matched;
            });

            $.when($(".result-right-set>ul").find('li').hide().filter($filteredResults.closest("li")).show()).done(function() {
                $('.from-head').find("span").html($(this).length + " <small> Results found</small>");
            });

        },
        getAlterNateFlight: function(e) {
            $(e.target).siblings("button").removeClass();
            $(e.target).addClass("active");
            var $filteredResults = $(".result-right-set>ul>li");
            this.getLoader();
            $filteredResults = $filteredResults.filter(function() {
                var matched = false,
                    currentFilterValues = [$(this).data('alternate').toString()];
                $.each(currentFilterValues, function(_, currentFilterValue) {

                    if ($.inArray(currentFilterValue, "1") != -1) {
                        matched = true;
                        return false;
                    }
                });
                return matched;
            });
            $.when($(".result-right-set>ul").find('li').hide().filter($filteredResults.closest("li")).show()).done(function() {
                $('.from-head').find("span").html($(this).length + " <small> Results found</small>");
            });
        },
        getNearByAirport: function(e) {
            $(e.target).siblings("button").removeClass();
            $(e.target).addClass("active");
            var $filteredResults = $(".result-right-set>ul>li");
            this.getLoader();
            $filteredResults = $filteredResults.filter(function() {
                var matched = false,
                    currentFilterValues = [$(this).data('nearby').toString()];
                $.each(currentFilterValues, function(_, currentFilterValue) {

                    if ($.inArray(currentFilterValue, "1") != -1) {
                        matched = true;
                        return false;
                    }
                });
                return matched;
            });
            $.when($(".result-right-set>ul").find('li').hide().filter($filteredResults.closest("li")).show()).done(function() {
                $('.from-head').find("span").html($(this).length + " <small> Results found</small>");
            });
        },
        getCheapestFlight: function(e) {
            $(".result-right-set>ul>li").show();
            $(e.target).siblings("button").removeClass();
            $(e.target).addClass("active");

            // var $filteredResults = $(".result-right-set>ul>li>");

            // $filteredResults = $filteredResults.filter(function () {
            // 	var matched = false,
            // 		currentFilterValues = [$(this).data('nearby').toString()];
            // 	$.each(currentFilterValues, function (_, currentFilterValue) {

            // 		if ($.inArray(currentFilterValue, "0") != -1) {
            // 			matched = true;
            // 			return false;
            // 		}
            // 	});
            // 	return matched;
            // });
            // $.when($(".result-right-set>ul").find('li').hide().filter($filteredResults.closest("li")).show()).done(function () {
            // 	$('.from-head').find("span").html($(this).length + " <small> Results found</small>");
            // });

            suggestions.getLoader();

            var all_result = $(".result-right-set>ul>li").sort(function(a, b) {
                var contentA = parseFloat($(a).attr('data-price'));
                var contentB = parseFloat($(b).attr('data-price'));
                return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
            });
            $('.from-head').find("span").html($(".result-right-set>ul>li").length + " <small> Results found</small>");

        },
        getLoader: function(e) {
            $("#divPopup").show();
            setTimeout(function() {
                $("#divPopup").hide('blind', {}, 500)
            }, 1000);
        },
        getShortestFlight: function(e) {
            this.getLoader();
            $(e.target).siblings("button").removeClass();
            $(e.target).addClass("active");
            var $filteredResults = $(".result-right-set>ul>li>.child_results").find(".fight-detail-show");

            $filteredResults = $filteredResults.filter(function() {
                var matched = false,
                    currentFilterValues = [$(this).data('stop').toString()];
                $.each(currentFilterValues, function(_, currentFilterValue) {

                    if ($.inArray(currentFilterValue, "0") != -1) {
                        matched = true;
                        return false;
                    }
                });
                return matched;
            });


            $.when($(".result-right-set>ul").find('li').hide().filter($filteredResults.closest("li")).show()).done(function() {
                $('.from-head').find("span").html($(this).length + " <small> Results found</small>");
            });

        },

        filterAll: function(e) {


            var selectedFilters = {};
            var $filterCheckboxes = $('.accordion-body>.for-only-check>ul>li').find('input[type="checkbox"]');
            this.getLoader();
            $filterCheckboxes.filter(':checked').each(function(i, val) {
                if (!selectedFilters.hasOwnProperty(this.name)) {
                    selectedFilters[this.name] = [];
                }
                selectedFilters[this.name].push(this.value);
            });


            var $filteredResults = $(".result-right-set>ul>li>.child_results").find(".fight-detail-show");


            $.each(selectedFilters, function(name, filterValues) {
                $filteredResults = $filteredResults.filter(function() {
                    var matched = false,
                        currentFilterValues = [$(this).data('airline').toString(), $(this).data('stop').toString()];
                    $.each(currentFilterValues, function(_, currentFilterValue) {

                        if ($.inArray(currentFilterValue, filterValues) != -1) {
                            matched = true;
                            return false;
                        }
                    });
                    return matched;
                });

                return false;
            });
            $.when($(".result-right-set>ul").find('li').hide().filter($filteredResults.closest("li")).show()).done(function() {});
        },
        gotoStep1: function(e) {

            $('.div1').show();
            $('.div2').hide();
            $('.div4').hide();
            $('.next1').show();
            $('.step-block').removeClass('active');
            if ($('.step-block').data("mobile") == "1") {
                $('.detail-right-show').show();
            }

            this.step1.addClass('active');
            return false;
        },
        gotoStep2: function(e) {


            $('.div1').hide();
            $('.div2').show();
            $('.div4').hide();

            $('.next1').hide();
            $('.step-block').removeClass('active');
            if ($('.step-block').data("mobile") == "1") {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                $('.detail-right-show').hide();
            }
            this.step2.addClass('active');
            return false;
        },
        gotoStep3: function(e) {
            if ($('input[name="fname[]"]') == null || $('input[name="fname[]"]') == '') {

                alert("Please enter the first name");
                $(this).focus();
                return false;
            }
            if ($('input[name="fname[]"]').val().length < 3) {

                alert("Please fill the details");
                $(this).focus();
                return false;
            }

            if ($('input[name="lname[]"]').val().length < 2) {
                $(this).focus();
                alert("Invalid lastname");
                return false;
            }
            var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('input[name="email[]"]').val());
            if (email == false) {
                alert("You have entered an invalid email address!");
                $(this).focus();
                return false;
            }
            var regExp = /^0[0-9].*$/;
            if (regExp.test($('input[name="contact[]"]').val())) {
                alert("You have entered an invalid contact number!");
                return false;
            }
            if (($('input[name="contact[]"]').val().length < 9) || ($('input[name="contact[]"]').val().length > 14) || ($('input[name="contact[]"]').val() == '1234567890') || ($('input[name="contact[]"]').val() == '0123456789') || ($('input[name="contact[]"]').val() == '0000000000') || ($('input[name="contact[]"]').val() == '9999999999') || ($('input[name="contact[]"]').val() == '2222222222') || ($('input[name="contact[]"]').val() == '3333333333') || ($('input[name="contact[]"]').val() == '4444444444') || ($('input[name="contact[]"]').val() == '5555555555') || ($('input[name="contact[]"]').val() == '6666666666') || ($('input[name="contact[]"]').val() == '7777777777') || ($('input[name="contact[]"]').val() == '8888888888') || ($('input[name="contact[]"]').val() == '1111111111') || (isNaN($('input[name="contact[]"]').val()))) {
                alert("You have entered an invalid contact number!");

                $(this).focus();
                return (false)
            }
            var jaa = $('#paymentForm').serialize();


            $.ajax({
                url: base + 'Result/Abandon',
                type: 'POST',
                data: { jaa: jaa },
                beforeSend: function() {

                },
                success: function(data) {

                }


            });

            $('.div1').hide();
            $('.div2').hide();
            $('.div4').show();
            if ($('.step-block').data("mobile") == "1") {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                $('.detail-right-show').hide();
            }
            $('.step-block').removeClass('active');
            this.step3.addClass('active');
            return false;
        },
    };
    suggestions.init();
})()

function selectRoom(e) {
    var key = $(e).data('key');
    var adult = $(e).data('adult');
    var child = $(e).data('child');
    var age = $(e).data("age");
    var hotel = $(e).data("hotel");

    var base = window.origin;

    if (base === "http://192.168.1.16") {

        base = base + '/australia-travel/';
    } else {
        base = "http://horntravel.com.au/";
    }

    $.ajax({
        url: base + 'Hotel/fetchForm',
        type: 'POST',
        data: { key: key, adult: adult, child: child, age: age, hotel: hotel },
        beforeSend: function() {

        },
        success: function(data) {
            window.location.href = base + data;
        }


    });


}
var base = window.origin;
if (base === "http://192.168.1.16") {

    base = base + '/australia-travel/';
} else {
    base = "http://horntravel.com.au/";
}

function seatSelection(e) {
    $('.item').removeAttr('style');
    $(e).css('border-top', '2px solid #0000FF');


    var ref = $(e).data();
    $('#seatsAvail').find('.main-select').html('Loading...');


    $.post(base + "Result/getOneSeatMap", { tags: ref })
        .done(function(data) {

            var html = "";
            var data = JSON.parse(data);


            var flightHtml = "";
            if (data.seatMap.EnhancedSeatMapRS != undefined) {
                if (data.seatMap.EnhancedSeatMapRS.SeatMap != undefined) {
                    var Columns = '';
                    var Columnh = '';
                    $.each(data.seatMap.EnhancedSeatMapRS.SeatMap, (j, SeatMap) => {

                        var totalCoulm = (SeatMap.Cabin[0].Column.length / 2);
                        $.each(SeatMap.Cabin[0].Column, (a, Coul) => {

                            if (a == 3) {
                                Columnh += `<div class="seat">
                                  <div class="seat-alpha">
                                 
                             </div></div>`;
                            }
                            Columnh += ` <div class="seat">
                                  <div class="seat-alpha">
                                      ${Coul.Column}
                                 </div>
                             </div>`;


                        });
                        $.each(SeatMap.Cabin, (k, Cabins) => {


                            $.each(Cabins.Row, (l, Rows) => {
                                var content = '';
                                if (Rows.Type != undefined) {
                                    if (Rows.Type[0].content == "ExitRow" || Rows.Type[0].content == "ExitRight") {
                                        content = 'Exit';
                                    } else if (Rows.Type[0].content == "RowDoesNotExist") {
                                        content = '';
                                    } else if (Rows.Type[0].content == "OverwingRow") {
                                        content = "Over Wing Row";
                                    } else {
                                        content = Rows.Type[0].content;
                                    }
                                }
                                var SeatsH = "";

                                var RowLength = (Rows.Seat.length / 2) - 1;
                                $.each(Rows.Seat, (m, Seats) => {

                                    if (m == 3) {
                                        SeatsH += ` <div class="seat">
                                  <div class="seat-empty">
                                  ${Rows.RowNumber}
                             </div></div>`;
                                    }

                                    let isSeatBooked = Seats.occupiedInd == true ? 'seat-booked' : 'seat-unbooked';
                                    let Price = Seats.chargeableInd == true ? Seats.Price[0].TotalAmount.currencyCode + "-" + Seats.Price[0].TotalAmount.content : "Free Seat";
                                    SeatsH += `
 <div class="seat">
                                  <div  data-booked="${Seats.occupiedInd}" class="${isSeatBooked} tooltipC"> 
                                  <span class="classic">
                            <b> ${Rows.RowNumber}${Seats.Number}</b>  
                            <br>
                            ${Price}
</span>                        
</div>  </div>
                          `;


                                });
                                Columns += ` <li> 
                           
                             ${SeatsH}
                        <div class="seat-num-danger "> ${content} </div>      
                         </li> `;
                            });
                        });
                    });



                    flightHtml = `<div class="main-select">
         <div class="main-select-in">
             <div class="flight-seat">

                 <div class="for-mid">
                     <ul>
                     <li>
                             
                         ${Columnh}
                             
                               <div class="seat-num">
                              
                             </div>
                         </li>
                     ${Columns}
</ul></div></div></div>
</div>`;
                }
            } else {
                flightHtml = `<div style="padding: 8px 8px;" class="main-select">
         <div class="main-select-in">
             <div style="padding:0" class="flight-seat">

                 <div class="for-mid"><b> Seat Assignment</b> <br>
With this fare class, the airline will assign you a seat  <br>  <b>For this you can call  <a href="tel:(800)-261-1902 ">(800)-261-1902 </a> after PNR generation</b> </div></div>
</div>
</div>`;
            }


            $('#seatsAvail').find('.main-select').remove();
            $('#seatsAvail').find('.seatAvailSlide').after(flightHtml);
            $('.flight-seat').css("width", $('.for-mid ul').width() + 50);

        });
}