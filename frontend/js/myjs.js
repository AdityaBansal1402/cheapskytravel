(function() {
    var main = {
        __init: function() {
            this.__cacheDom();
            this.__bindEvents();
            this.initCal();
        },
        __cacheDom: function() {
            this.$searchForm = $("#sformdata");
            this.$searchForm2 = $("#sformdata2");

            this.$onewayBtn = this.$searchForm.find(".column1");
            this.$roundBtn = this.$searchForm.find(".column");
            this.$multiBtn = this.$searchForm.find(".column3");
            this.$submitBtn = this.$searchForm.find("#submit");
            this.$return_date = this.$searchForm.find("#checkout");
            this.$checkin = this.$searchForm.find("#checkin");
            this.$checkin_multi1 = this.$searchForm.find("#checkin-multi1");
            this.$checkin_multi2 = this.$searchForm.find("#checkin-multi2");
            this.$checkin_multi3 = this.$searchForm.find("#checkin-multi3");
            this.$room = this.$searchForm2.find("#room");
            this.$departOn = this.$searchForm2.find("#departOn");
            this.$returnOn = this.$searchForm2.find("#returnOn");

        },
        __bindEvents: function() {
            this.$onewayBtn.on("click", this.selectOneWay.bind(this));
            this.$roundBtn.on("click", this.selectRoundTrip.bind(this));
            this.$multiBtn.on("click", this.selectMultiTrip.bind(this));
            this.$checkin.on("change", this.minPick.bind(this));
            this.$return_date.on("change", this.maxDrop.bind(this));
            this.$submitBtn.on("click", this.submitForm.bind(this));

            this.$searchForm2.on("submit", this.submitHotelForm.bind(this));
            this.$searchForm2.delegate(".element-adult>select[name='child[]']", 'change', this.changeInChild.bind(this));
            this.$room.on("change", this.addRoom.bind(this));
        },
        selectMultiTrip: function(e) {
            $('#ordinary').hide();
            $('#for-multicity').show();
            $("input[type='radio']").removeAttr("checked");
            this.$multiBtn.find("input[type='radio']").attr("checked", true);
            this.$onewayBtn.removeClass("activebutton");
            this.$roundBtn.removeClass("activebutton");
            this.$multiBtn.addClass("activebutton");


        },
        changeInChild: function(e) {
            $html = "";
            var count = $(e.target).val();
            var room = $(e.target).data('room') - 1;
            for (let index = 0; index < count; index++) {

                if (index == 0) {

                    $html += `<h3>Select age</h3>`;
                }

                $html += `
				
				<div class="element-adult"><label>Select Age</label>
                                <select name="age[${room}][]" class="large-adult"
                                    style="background:url(./frontend/img/dd.png) #fff no-repeat right;">
                                    <option value="">-- select --</option>
                                    <option value="1">1 </option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select></div>`;

            }
            $(e.target).parent().siblings("#age").html("");
            $(e.target).parent().siblings("#age").append($html);
        },
        submitHotelForm: function(e) {
            var child = $(e.target).find("select[name='child[]']");
            child.each(function(e, val) {
                if ($(this).val() != "") {
                    if ($(this).parent().siblings("#age").find("select[name='age[]']").val() == '') {

                        alert("Please select the child age");
                        $(this).parent().siblings("#age").find("select[name='age[]']").focus();
                        return false;
                    }
                }
            });

        },
        addRoom: function(e) {
            $("#roomSpace").html("");
            for ($i = 1; $i < $(e.target).val(); $i++) {
                $("#roomSpace").append("<div class='clearfix'></div>");
                $("#roomSpace").append("<h3>Room " + ($i + 1) + "</h3>");
                var clone = $("#copyMe").clone();
                clone.find('select[name="child[]"]:last').attr('data-room', $i + 1);
                $(clone).find("#age").html("");
                $("#roomSpace").append(clone);
            }
        },

        selectOneWay: function(e) {

            $('#ordinary').show();
            $('#for-multicity').hide();
            $("input[type='radio']").removeAttr("checked");
            this.$onewayBtn.find("input[type='radio']").attr("checked", true);
            this.$onewayBtn.addClass("activebutton");

            this.$roundBtn.removeClass("activebutton");
            this.$multiBtn.removeClass("activebutton");
            this.$return_date.attr("disabled", true);

        },
        submitForm: function(e) {


            var que = 0;

            if ($("#flight-from2").val() == "" || $("#flight-from2").val() == null) {
                alert("Select the origin");
                que = 1;
                return false;
            }
            if ($("#flight-to2").val() == "" || $("#flight-to2").val() == null) {
                alert("Select the destination");
                que = 1;
                return false;
            }
            $return = "Arrival";
            $one = "";
            if ($("#checkout").prop("disabled") == false) {
                if ($("#checkout").val() == "" || $("#checkout").val() == null) {
                    alert("Please select checkout date");
                    que = 1;
                    return false;
                }
                $return = "Return";
                $one = `<h3>${$("#checkout").val()}</h3>`;
            }


            if (que == 0) {

                $("section").hide();
                $("#blog").show();
                $("#header-wrapper").hide();
                var origin = window.location.href;
                $airline = ["AA", "UA", "DL", "F9", "WS"];
                var $imgAir = "";
                $airline.map(function(i, val) {
                    $imgAir +=
                        ' <li class="searching"><img src="https://www.gstatic.com/flights/airline_logos/70px/' +
                        i +
                        '.png" alt="">  ';
                    $imgAir += `    <span class="load">
                <img class="tick_image_hidden" src="data:image/gif;base64,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" height="38" width="38">
                <img class="spinner_image" src="data:image/gif;base64,R0lGODlhFAAUAKUAAAQCBISChMTCxERCRCQiJKSipOTi5GRiZBQSFJSSlNTS1FRSVDQyNLSytPTy9HR2dAwKDIyKjMzKzExKTCwqLKyqrOzq7BwaHJyanNza3FxaXDw6PLy6vPz6/GxqbHx+fAQGBISGhMTGxERGRCQmJKSmpOTm5BQWFJSWlNTW1FRWVDQ2NLS2tPT29Hx6fAwODIyOjMzOzExOTCwuLKyurOzu7BweHJyenNze3FxeXDw+PLy+vPz+/GxubAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQJBgA8ACwAAAAAFAAUAAAG60CeUOgoaQggYWfIZNIoEBAIwOt0Wq1ls+NCvKIA6rXlKDcDJ+9LFygpyxaLY9iwXRCkhnbYqVlMJi08LRt2MzhNTH8GBjwNBAQ2AolMHQY4GQ49JCQ5e5Q8FikZBhMUFG6gQy0pCikMMwwSqnwKMQobKysKtEoiEiILGxs7vYMCIjEfOjoRxgY7OwocIyMLJrQdOxwcgQcTMh+fTRI0DTtLAjILKhFzWxIlFTTYQjcaGjkPLCYOLTUKStwoUIIXnxsHDnjo8SBAhAgwEmC4IWEcDwkPFrpwESBExBKIQHWQcCPEhwAoGqQYFwQAIfkECQYAPwAsAAAAABQAFACFBAIEhIKEREJExMLEJCIkpKKkZGJk5OLkFBIUlJKUVFJU1NLUNDI0tLK0dHJ09PL0DAoMjIqMTEpMzMrMLCosrKqsbGps7OrsHBocnJqcXFpc3NrcPDo8vLq8fHp8/Pr8BAYEhIaEREZExMbEJCYkpKakZGZk5ObkFBYUlJaUVFZU1NbUNDY0tLa0dHZ09Pb0DA4MjI6MTE5MzM7MLC4srK6sbG5s7O7sHB4cnJ6cXF5c3N7cPD48vL68fH58/P78BuXAn1D4qhhoCBhJVfoMn8IGC5WEQUAAzAsq/AQIGBT1ig18ztAIAYfDiCKVWkSy+7xeTmGHRiIxOnlPdi8PTi8SNBQ8B1xDHw83Dz8tDJUDjY43FxcvHhwsFphPDxcnNyo8PBWijicHJyICAjOsXTsHOxISIhu1QhvABjIyl7UfCysbEQoKKb4nCzMHAyoaJhe1MxMzNy8OOgYRgVwbAwMzThMmJhYpklwLHT0D2EIVFjYuEfR4NxsdNVp0WCGohgsXPgKESJEhR4E4DQjCi5AwQgKGBUq0YITpWI0MCTKU6HFg3I8gACH5BAkGAD8ALAAAAAAUABQAhQQCBISChERCRMTCxCQiJKSipGRiZOTi5BQSFJSSlFRSVNTS1DQyNLSytHRydPTy9AwKDIyKjExKTMzKzCwqLKyqrGxqbOzq7BwaHJyanFxaXNza3Dw6PLy6vHx6fPz6/AQGBISGhERGRMTGxCQmJKSmpGRmZOTm5BQWFJSWlFRWVNTW1DQ2NLS2tHR2dPT29AwODIyOjExOTMzOzCwuLKyurGxubOzu7BweHJyenFxeXNze3Dw+PLy+vHx+fPz+/AbrwJ9Q+KpZWBgMTVN6DJ/CDo+QRMFgEAip8oF+IhQSAYdBIbCgdAKaoNHCslijlhBBALjVs8dhMTg9XU8jPBs/gi8qHBwiB1BeHy8/PQI8PBOPUC8PLx8BIhIOgplCHw+cBhISNaRPHzewKgoyeq1DF7gaKiqGtkInByc2OjqYvh8HwSkGBjm+PzcbGxcjJhYOF74bKxs3Hx42DimjjwczC70zDi4eBZKPGyMTMzdDDR4+ASkTF50POyMGDJjgaMiHFiFCxEiQoUCNGg06dBiwI9OKDAtTFChQAeKAE60+rOhQokCJFhNOkPsRBAAh+QQJBgA7ACwAAAAAFAAUAIUEAgSEgoREQkTEwsQkIiSkoqRkYmTk4uQUEhSUkpQ0MjS0srR0cnT08vRUUlTU0tQMCgyMioxMSkwsKiysqqxsamzs6uwcGhycmpw8Ojy8urx8enz8+vzc2tzMysxcXlwEBgSEhoRERkQkJiSkpqRkZmTk5uQUFhSUlpQ0NjS0trR0dnT09vRUVlTU1tQMDgyMjoxMTkwsLiysrqxsbmzs7uwcHhycnpw8Pjy8vrx8fnz8/vzc3tzMzswAAAAAAAAG6sCdUMha0HAjgsJAaQyfQo1kkrRdTq+XjALdcWAZmWxCsJ4QWQiD88RkUilFK7FYJGIICAiwGg4EOBkSOWxPAzIAAAguOywGIgIOB11CNQo4jDsDEpwelEMWXmwRDjE6n1AcLBw0LS0aqEOqLI4fHw+xQw27JQYGPLmVNTUbJRWeuRwWFjU3NAwkwQ0mJg09DCsBobEH3Q0cIRs6BYWUFi48kzsPAQEhFCyUBw8uHTVDKiEwCTcPNRwcpvXw0OOBCSgaEiTAcKPADBUacgzw4OFglw4FGFKgsECFRA/3PnHokGPBjAU5DHYJAgAh+QQJBgA/ACwAAAAAFAAUAIUEAgSEgoREQkTEwsQkIiSkoqRkYmTk4uQUEhSUkpRUUlTU0tQ0MjS0srR0cnT08vQMCgyMioxMSkzMyswsKiysqqxsamzs6uwcGhycmpxcWlzc2tw8Ojy8urx8enz8+vwEBgSEhoRERkTExsQkJiSkpqRkZmTk5uQUFhSUlpRUVlTU1tQ0NjS0trR0dnT09vQMDgyMjoxMTkzMzswsLiysrqxsbmzs7uwcHhycnpxcXlzc3tw8Pjy8vrx8fnz8/vwG7cCfUPjquCQMmsBUew2fwoGKw2JQSCQChtX4QD8ZkYCazOIwKITLOyxIxAJDptVJaTAIBMw3nChkMioDbEIfEywwMBAVPy82GioGJ1BDNxwQICQPIwYaGjOUTysIAAAlGQY6EaFQFgAwHj4WJgOsTxstkw42Nhu2Tx/BLsMHv0MfLx8RHh4LxkIPLy8VPgENzx8P0QshIQk3xhc3N8EpMQk1vw8n4kIbCSkZHU6UFwcHJ4QDGRkFNRsPgr24sGPDjgPgnowoUKJCjRY9RkyYsWDFhguhdjSo0aBDhwEjKG5IGOrDgQk9Is4YSUhIEAAh+QQJBgA9ACwAAAAAFAAUAIUEAgSEgoTEwsREQkSkoqTk4uRkYmQkIiQUEhSUkpTU0tRUUlS0srT08vR0cnQ0MjQMCgyMiozMysxMSkysqqzs6uxsamwsKiwcGhycmpzc2txcWly8urz8+vx8enw8OjwEBgSEhoTExsRERkSkpqTk5uRkZmQkJiQUFhSUlpTU1tRUVlS0trT09vR0dnQ0NjQMDgyMjozMzsxMTkysrqzs7uxsbmwsLiwcHhycnpzc3txcXly8vrz8/vx8fnwAAAAG68CeUNjhhXajwcLFag2fQollNkl+Xo/LiAHtdUib1WJmfd0up1Og86QZdmEHgcchmG6HAy4wVFhMBhYSXTIDOBgYXB0+NhYuFV1CNSMoKA8NMh4ODiqRQxoHMAgkJB4eGZ5PDjAwOwk+PiKpQwIQECcRISEFs0IFECAwMTERJb09JTAAEAQJCRrHFQ8oBywpGTzHXg0qOhk5FA29HeReNAQkAmyeHS0t6wUUFDQS61AtDQ3vQzIMDCwiCuzr0KCCwRpOnihgwUOAAAkKNGjQUaIEwkgVHIqQIUPFxAIVEkbqUEGDAgXdKoiDEgQAIfkECQYAPAAsAAAAABQAFACFBAIEhIKEREJExMLEJCIkZGJk5OLkpKKkFBIUVFJU1NLUNDI0dHJ09PL0tLK0lJKUDAoMjIqMTEpMzMrMLCosbGps7OrsrKqsHBocXFpc3NrcPDo8fHp8/Pr8vLq8nJqcBAYEhIaEREZExMbEJCYkZGZk5ObkpKakFBYUVFZU1NbUNDY0dHZ09Pb0tLa0DA4MjI6MTE5MzM7MLC4sbG5s7O7srK6sHB4cXF5c3N7cPD48fH58/P78vL68nJ6cAAAABupAnlDYGT1oqQQu4GkNn8IJB4dLSkQCXcIDFTpolQIuk7jqNqtFpPN0MRiVUuAyGFxoutWMAhsqAhwMOzJdCjF7JC48HQ87OyEWXUINMSQEGy0qESEBOZJDGhQ3NzYOMBEnn08cGBgFBw8PCqpDAygoCx+6JrRCJigIKD7Dkb0WCC8INicnnr0yEBAkIxcXE708ESAgGQalLk6qLQQAIAcdHi4e16odJy8EDTwmHj0DKmxdHWwNPaD2ExRYCLevRYt9+YbkmDBBhgoNBgxYsNCgwUFJFlQoeJjDgIkaNRoklFQjYg4TFMM9CQIAIfkECQYAOwAsAAAAABQAFACFBAIEhIKExMLEREJEpKKk5OLkJCIkZGJkFBIUlJKU1NLUtLK09PL0dHJ0VFJUNDI0DAoMjIqMzMrMTEpMrKqs7OrsLCosbGpsHBocnJqc3NrcvLq8/Pr8fHp8XFpcPDo8BAYEhIaExMbEREZEpKak5ObkJCYkZGZkFBYUlJaU1NbUtLa09Pb0dHZ0NDY0DA4MjI6MzM7MTE5MrK6s7O7sLC4sbG5sHB4cnJ6c3N7cvL68/P78fH58XF5cAAAAAAAABujAnVDIkWRah94lomMNn0JFyHY59TwO2aSngwo3nVajenBkR4MBjPPUBXidBmwhksw66I8rMdREQgEhKmxPKg56Dxs7HDgJEQk0XkIMHjU1IywaKQkJOZJDOS4WJgs6GRkLn08BBgYXMwQ4KqpDAjc3HxQkJBW0QiUGGDczFBS9vhU3KDcbCwslvjsKCAgPMSsrCtEwEC89JRs6IoSfDAYQECRFAgLaqgcgIBYMOxV1MTnkhSAAIBRDBWLEUJCDATkOCBdAsKGvgAoNGnIUqECDAQuERZxAYRCxwMSKFvVJYlChBMWQXoIAACH5BAkGAD4ALAAAAAAUABQAhQQCBISChERCRMTCxCQiJGRiZOTi5KSipBQSFJSSlFRSVNTS1DQyNHRydPTy9LS2tAwKDIyKjExKTMzKzCwqLGxqbOzq7KyqrBwaHJyanFxaXNza3Dw6PHx6fPz6/Ly+vAQGBISGhERGRMTGxCQmJGRmZOTm5KSmpBQWFJSWlFRWVNTW1DQ2NHR2dPT29Ly6vAwODIyOjExOTMzOzCwuLGxubOzu7KyurBweHJyenFxeXNze3Dw+PHx+fPz+/AAAAAbuQJ9Q6JmdQo1aKzFyDZ/CTaLXSVYKOk1lABUOIqFAp1W7alQKWcbznCRikUDqM5s8AiqZRJAZ7jIpCSkbbE8bBSI8Ah8+Hhc5GTk2XUIOBTwcCi47JwcHBpRDBgIsDA8TFyeMoUMhDDQNLzc3O6xDExQUAg+8FrZCJhQkFC/FDr8+FiQEJCMDH76/CzgYHCsjI7W/CSgYBRYTEwuFoQ40CCgXPgszC9qhJTAINMcOCysbJpQOFRAQMOqEWNiww4AJF+Q8sAAAAkIDKBYKmrBgw4GHizoYNnACxYWFiQ4cuHAygMQJVhcdVETIhuOQIAAh+QQJBgA/ACwAAAAAFAAUAIUEAgSEgoREQkTEwsQkIiSkoqRkYmTk4uQUEhSUkpRUUlTU0tQ0MjS0srR0cnT08vQMCgyMioxMSkzMyswsKiysqqxsamzs6uwcGhycmpxcWlzc2tw8Ojy8urx8enz8+vwEBgSEhoRERkTExsQkJiSkpqRkZmTk5uQUFhSUlpRUVlTU1tQ0NjS0trR0dnT09vQMDgyMjoxMTkzMzswsLiysrqxsbmzs7uwcHhycnpxcXlzc3tw8Pjy8vrx8fnz8/vwG6sCfUPjZNFKhQCQ3+wyfwl0pEYsEfC6HxTOBCieFTKp6zVpMhoJzuCgVcpnKaLHoJdA6TWl4alRKFTteOy4aCioDPx89DTUND15CDw4yMgYvJx0tLReRQwcqEiIdKx09XZ5DCQICPhMDAwepQzMcPAoTIyOQsz8XHCw8M8O8sxcsDCwrdDe9Pys0NBIHKyudvRkkFDYPGxs7a54PHAQEDT8HOwfXng4YOByQLwcnF8VPLzYIKDg1Qw/1bjxY0y0BAxj7PEB5IPDBCycaQICAgNDDCy8fHD78oQDARAoVZn0Y+UMFARUl7v0IAgAh+QQJBgA9ACwAAAAAFAAUAIUEAgSEgoTEwsREQkSkoqTk4uRkYmQkIiQUEhSUkpTU0tRUUlS0srT08vR0cnQ0NjQMCgyMiozMysxMSkysqqzs6uxsamwsKiwcGhycmpzc2txcWly8urz8+vx8enw8PjwEBgSEhoTExsRERkSkpqTk5uRkZmQkJiQUFhSUlpTU1tRUVlS0trT09vR0dnQ8OjwMDgyMjozMzsxMTkysrqzs7uxsbmwsLiwcHhycnpzc3txcXly8vrz8/vx8fnwAAAAG7MCeUNjRCSiZVI6h6AyfwhKHQshlErFQIKaACjUMGoVESKWyAY+L4RxqOCwWjSPTaSQEn8dhow0rIgIcPCVeBSE2NhYSQgoCAiItXkItISYGDi01EhIiNZN/JjsbIgUyChqgTzkbKxEaKioVqkMKCzMmGrqStD0VMxMLOsO8tDUTIxMlBQXFqhofAys1JRUNvT0ELy8+HRUVn7QNEw8PLD01NQ3OXh4XNxOSHQ3rbVAtHgfv50QtHf8ZFHzTkOEFjgMnAkD514EFABAocCBAgALDgW6TOjx4CAECDIoP2IDqQGLFgY83dlC49iQIACH5BAkGAD8ALAAAAAAUABQAhQQCBISChERCRMTCxCQiJKSipGRiZOTi5BQSFJSSlFRSVNTS1DQyNLSytHRydPTy9AwKDIyKjExKTMzKzCwqLKyqrGxqbOzq7BwaHJyanFxaXNza3Dw6PLy6vHx6fPz6/AQGBISGhERGRMTGxCQmJKSmpGRmZOTm5BQWFJSWlFRWVNTW1DQ2NLS2tHR2dPT29AwODIyOjExOTMzOzCwuLKyurGxubOzu7BweHJyenFxeXNze3Dw+PLy+vHx+fPz+/AbrwJ9Q+DlNWpVSpbP6DJ/Cy6jVqFVyuVQis4IKD4Nep1opZFKxSKTlHB4mg0FntDrsZo1YKODrDB8zMyMTF14HKQEeLgtCGwuPL15CLwkODj4fDxsrKw+SQxcuFhaEGxsHn08lJiYpJzsHN6lDGzoGDie5bbMXOhoaFxcnu6k3GgoqN8rEnzsSMiYP0pGzPxUiEiGZD9SpDyoCAn4vLx/MUAEcHCrU5h8+hVAvATQsHH5PFgA4AQsXNxtySCBBg0EEKANAAAABAQYOEhhwEKBAQZuXCgQYwkCAIiIBHmw+PSihgUJHBiZqeHoSBAAh+QQJBgA/ACwAAAAAFAAUAIUEAgSEgoREQkTEwsQkIiSkoqRkYmTk4uQUEhSUkpRUUlTU0tQ0MjS0srR0cnT08vQMCgyMioxMSkzMyswsKiysqqxsamzs6uwcGhycmpxcWlzc2tw8Ojy8urx8enz8+vwEBgSEhoRERkTExsQkJiSkpqRkZmTk5uQUFhSUlpRUVlTU1tQ0NjS0trR0dnT09vQMDgyMjoxMTkzMzswsLiysrqxsbmzs7uwcHhycnpxcXlzc3tw8Pjy8vrx8fnz8/vwG48CfcHhZDFqN1mD3GTqFj8mg12rVKoVcafMUHmaT0aBjxeZSiUGTuFqEZ7vDYdXKpGKR3vCxaS9uXRcFESEhK147GxsvXUIvOQEBER8vcjuMjUIXAS4uMzcnJxeZTjUODjk3FxeYpD8bNjY+N6prrg8WJhYPvLakNwbBLw8vvpkHKho2lB/GjRUqCjE/za6OBhIyA9Q/ERLOQxECIgaMDxwAABInXS8hHON6QjYg9SQRfzc7BQoMLDwJnHywAQECDAQoSFCgoNBfDGcVKBxEgAEHAYUSOpB6UEEHA4s8LDRoJSQIACH5BAkGAB8ALAAAAAAUABQAhQQCBISGhERCRMTGxKSmpGRiZCQiJOTm5BQSFJSWlFRSVNTW1LS2tHRydDQyNPT29AwKDIyOjExKTMzOzKyurGxqbOzu7BwaHJyenFxaXNze3Ly+vHx6fDw6PCwuLPz+/AQGBIyKjERGRMzKzKyqrGRmZCQmJOzq7BQWFJyanFRWVNza3Ly6vHR2dDQ2NPz6/AwODJSSlExOTNTS1LSytGxubPTy9BweHKSipFxeXOTi5MTCxHx+fDw+PAAAAAAAAAbswI9waNHMBrvBRPcaOoW21WwyGmxYDBpD94SupLPqlUYhEUbNoU2nWS1Wh9NJMzDjUqPh63BgP7onFBgpCStCFidxaV0vJAkxKS8vFoiLXR8WMSEBCw82n5dPLAEBJA+elqEaPDwRkn+hTjYctJKpoTYtDS2YGhqxQzoVNTwcNwAFwEIMJRUpBAAACL+xDw05BTs2JiAgIrdDMSoZNX8kEDAwCieMETIKKgNDDTAICB4xCxY2GiQZIhJkpHDyogUCFBcuGHDQwYGLHgJERHrygoaDCzcMmPDgsIOKDeA+2KBQQoAHDxJasLDxJAgAIfkECQYAPgAsAAAAABQAFACFBAIEhIKExMLEREJEJCIkpKKk5OLkZGZkFBIUlJKU1NLUVFJUNDI0tLK09PL0dHZ0DAoMjIqMzMrMTEpMLCosrKqs7OrsbG5sHBocnJqc3NrcXFpcPDo8vLq8/Pr8fH58BAYEhIaExMbEREZEJCYkpKak5ObkbGpsFBYUlJaU1NbUVFZUNDY0tLa09Pb0fHp8DA4MjI6MzM7MTE5MLC4srK6s7O7sdHJ0HB4cnJ6c3N7cXF5cPD48vL68/P78AAAAButAn3DoshhUSJ1lyBx6jDqdRiGTiCTLpu9pMRl0KqpE0OuoPEyPzWZp2xwOk0rQaTVUTBfc5tI6BA0NNQZCHh4ufVqFPRUlDWiGhopDDhUFOVI2W5NMIjkZHQQYIxKcQyYZKQUgACACpkIOCTEJMCAgpbAOMRERFBAQJbA+JgEBKRsQMCfDAh8fJSUwCDiEnC4BDy8yLjQoKAtokwUXNwFoDRgoGDtZaTkHJycyhR84BAQ8GRpvBg0XG3YcEObkAwkSFGiwGDFjwoQFK3YUEMekwQAKDFhwGDBgxowTIq41uDGDx4AdIXpQFBIEACH5BAkGAD8ALAAAAAAUABQAhQQCBISChERCRMTCxCQiJKSipGRiZOTi5BQSFJSSlFRSVNTS1DQyNLSytHRydPTy9AwKDIyKjExKTMzKzCwqLKyqrGxqbOzq7BwaHJyanFxaXNza3Dw6PLy6vHx6fPz6/AQGBISGhERGRMTGxCQmJKSmpGRmZOTm5BQWFJSWlFRWVNTW1DQ2NLS2tHR2dPT29AwODIyOjExOTMzOzCwuLKyurGxubOzu7BweHJyenFxeXNze3Dw+PLy+vHx+fPz+/AbrwJ9w+HncTofD6fEZOoWf1+NyQe42q9XtSTTeqgfsYjY5cKMvafp1O8zIg91wsPrYm8/XYtAbnH4PBAgxeFw/HxM9HT0fJQCPA4ZDDx0NDQcaICAikk4zNTUjFBAQKZ1DFxUlDTAwEJGnPy8FtCgIMBOxsjkZOQwIKDW6FykpBQYoGA66EzEJLTU4OBRmnR8JIRErDxw4BBqFXBU+IQlNLRQkFCZbTx8VLh4BC1ABFDQMEgUbDw8nHT4sOHDRwMmHECxYcOAhQoUGDToMWLBRI5yQDjI4CBAhQYGKiC5mdHoBUIcMBRZijLAYBAAh+QQJBgA6ACwAAAAAFAAUAIUEAgSEgoTEwsREQkQkIiTk4uSkoqRkYmQUEhTU0tQ0MjT08vS0srSUlpRUUlR0dnQMCgyMiozMyswsKizs6uysqqxsamwcGhzc2tw8Ojz8+vy8urxcWlxMSkycnpx8fnwEBgSEhoTExsRERkQkJiTk5uSkpqRkZmQUFhTU1tQ0NjT09vS0trScmpxUVlR8enwMDgyMjozMzswsLizs7uysrqxsbmwcHhzc3tw8Pjz8/vy8vrxcXlwAAAAAAAAAAAAG7kCdcKhZLWgUCm0xbDY1xSOlUMDhmE6NDLoy0kolKyZVcL4gGF1xvaCME7KysAICEEpO4Qojk0goOgskEAA3aXlqKSICEjoVECAQLIhDKwI7GyU8MBAdlE0YGywJCjAILZ9DFCwMGxcIKAKpejW1NygXMrNqFSYVGRc3DLsUHgY1JwQ3D7sJLS07NSQTCnKUGi0NDRgrAxMzBxqfDBExHuIsMwoKNjR5GgwBIREpQxEqKjkuJgULCyUCQjz4EGDDkxg5Bgzo0IGHhQMWbDx4wULckw0cRnRw4ILDgRM2AiT4tGJHCAsceDxoIWGFkyAAIfkECQYAPwAsAAAAABQAFACFBAIEhIKEREJExMLEJCIkpKKkZGJk5OLkFBIUlJKUVFJU1NLUNDI0tLK0dHJ09PL0DAoMjIqMTEpMzMrMLCosrKqsbGps7OrsHBocnJqcXFpc3NrcPDo8vLq8fHp8/Pr8BAYEhIaEREZExMbEJCYkpKakZGZk5ObkFBYUlJaUVFZU1NbUNDY0tLa0dHZ09Pb0DA4MjI6MTE5MzM7MLC4srK6sbG5s7O7sHB4cnJ6cXF5c3N7cPD48vL68fH58/P78Bu3An1D4Ib4eyNdwOaxQDp/X8Xa7XJTMjwMEsP2ij+rpcLgwPRAu7FQEjzcbs7CGAEEwNeb3sOo/fg80CBAEO3pDOysLCz8VCAgwPYdDHwsTExcmKCgKk0s7IyMrHBgYOZ5DDwM9EwQ4OBOoQi89HR0kBAQzsl8dDS0CJBQNvDc1DR0ONDQ+vBslFSMNNAw8J6gfFQUlOy8yHBwWRZM9GTkVRR08PAIeN3ofHQkJGYZCCQIiEgYVB0gXI1KEiJBAEqUEEmQoUKHDhgsHHnwEiGCQyQADKjToMGHBgQsPCVZ4ejEghgsLNgIUmIFlSBAAOw==
" height="38" width="38">
            </span></li>`;
                });





                $(".head-top").after(` <div id="immediate">
			            <div class="progress">
			            <div class="progress-bar" role="progressbar" aria-valuenow="70"
			            aria-valuemin="0" aria-valuemax="100" style="width:70%">
			              <span class="sr-only">70% Complete</span>
			            </div>
			          </div>
			            <div id="immediate_inner">

			                <div class="loader_logo">
			                 
			                   
								  <p class='loadP'>   Please wait while we are searching unpublished exclusive for you from over 450+ airlines</p>
                        <div  style="background:url('https://www.skyhyglobal.com/frontend/img/download.gif');width:100%;    height: 10px;">   </div>

			          <div class="result-load-show">

			                    <div class="img-set">
			                    <img src="${origin}/frontend/img/flg.jpg" alt="Flight search">
			                    </div> 

			            <div class="cont-cover">
			            <div class="air-dtl">
			            <p>Departure</p>
			                <h2>${$("#flight-from2").val()}</h2>
			                <small>${$("#flight-from").val()}</small>
			        <h3>${$("#checkin").val()}</h3>
			                                </div>
			            <div class="load-gif d-none">
			                 <img src="https://www.skyhyglobal.com/frontend/img/round-trip.gif" alt="Flight search">
			                                </div>
			                                
			            <div class="load-gif">
			                 <img src="https://www.skyhyglobal.com/frontend/img/round-trip.gif" alt="Flight search">
			                                </div>
			                                


			            <div class="air-dtl">
			            <p>${$return}</p>
			                <h2>${$("#flight-to2").val()}</h2>
			                <small>${$("#flight-to").val()}</small>
										${$one}
			                                </div>
			                        </div>
			                      </div>
			<ul class='loading_lgs p-0'>
			${$imgAir}
</ul>
			</div>

			            </div>

			         `);

                main.animate();

                $("#sformdata").submit();
                $(e.target).attr("disabled", true);
            }
        },
        animate: function() {
            var interval = 2000;
            if ($(".loading_lgs li").hasClass("searching")) {
                setTimeout(function() {
                    var length = $(".searching").length;
                    var lg = $(".loading_lgs li.searching").get(
                        Math.floor(Math.random() * length)
                    );

                    $(lg)
                        .removeClass("searching")
                        .addClass("loaded");
                    $(lg)
                        .find("span.load .spinner_image")
                        .hide();
                    $(lg)
                        .find("span.load .tick_image_hidden")
                        .removeClass("tick_image_hidden")
                        .addClass("tick_image_show");
                    main.animate();
                }, interval + Math.random() * interval - interval / 2);
            } else {
                if ($(".no_logos_load").is(":visible") == false) {
                    //$('.loading_lgs, .currently').hide();
                    //$('#immediate').hide();
                }
            }
        },

        selectRoundTrip: function(e) {
            $('#ordinary').show();
            $('#for-multicity').hide();
            this.$onewayBtn.removeClass("activebutton");
            this.$multiBtn.removeClass("activebutton");
            $("input[type='radio']").removeAttr("checked");
            this.$roundBtn.find("input[type='radio']").attr("checked", true);
            this.$roundBtn.addClass("activebutton");
            this.$return_date.removeAttr("disabled");
        },
        getDate: function(e) {
            var dateFormat = "yy-mm-dd";
            try {
                this.date = $.datepicker.parseDate(dateFormat, e.val());
            } catch (error) {
                this.date = null;
            }

            return this.date;
        },
        minPick: function() {
            main.$return_date.datepicker({
                changeMonth: false
            });
            main.$return_date.datepicker(
                "option",
                "minDate",
                this.getDate(this.$checkin)
            );
        },
        maxDrop: function(e) {
            main.$checkin.datepicker(
                "option",
                "maxDate",
                this.getDate(this.$return_date)
            );
        },
        initCal: function() {
            var numberOfMonths = 1;
            this.$checkin.attr("autocomplete", "off");
            this.$checkin_multi1.attr("autocomplete", "off");
            this.$checkin_multi2.attr("autocomplete", "off");
            this.$checkin_multi3.attr("autocomplete", "off");
            this.$return_date.attr("autocomplete", "off");
            this.$departOn.attr("autocomplete", "off");
            this.$returnOn.attr("autocomplete", "off");

            this.$checkin.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    main.$return_date.datepicker("option", "minDate", dt);
                }
            });

            this.$checkin_multi1.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);

                }
            });



            this.$return_date.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    //main.$checkin.datepicker("option", "maxDate", dt);
                }
            });


            this.$checkin_multi2.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    //main.$checkin.datepicker("option", "maxDate", dt);
                }
            });

            this.$checkin_multi3.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    //main.$checkin.datepicker("option", "maxDate", dt);
                }
            });

            this.$departOn.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate());
                    main.$returnOn.datepicker("option", "minDate", dt);
                }
            });
            this.$returnOn.datepicker({
                changeMonth: false,
                minDate: 0,
                numberOfMonths: numberOfMonths,
                onSelect: function(selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                }
            });
        }
    };
    main.__init();
})();