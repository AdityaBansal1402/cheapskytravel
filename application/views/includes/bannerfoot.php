<style>
    @media only screen and (min-width: 376px) and (max-width:1000px){
    .gmd {
        background: #ffeb3b !important;
        padding: 2em 7em;
        border-radius: 4em;
        font-weight: 700;
        color: #4a6b7b;
    }

    .container {
        position: relative;
    }

    .card-group {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        width: 100%;
        border: 1px dotted black;
    }

    .card {
        flex: 1;
        position: relative;
        border: none;
        background: #243257;
        color: white;
        height: 5rem;
        border-radius: 1.2em;
    }

    .txt01c,
    .txt02c b {
        color: #FFDE59;
        font-weight: 700;
        font-size: 90%;
        top: 100%;
    }

    .vr {
        position: absolute;
        right: 50%;
        top: calc(70% - 1.8em);
        height: 3.6em;
        border-radius: 4%;
        z-index: 1000;
        background: #ffbd59 !important;
    }

    .cls-1 {
        fill: white;
    }

    .whit {
        fill: white;
    }

    .elemen {
        width: 75%;
    }

    .ribbon {
        width: 140px;
        height: 150px;
        overflow: hidden;
        position: absolute;
    }

    .ribbon::before,
    .ribbon::after {
        position: absolute;
        z-index: -1;
        content: '';
        display: block;
        border: 0.5em solid #ffbb60;
    }

    .ribbon span {
        position: absolute;
        display: block;
        width: 250px;
        padding: 0px 0;
        background-color: #ffbb60;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
        color: #243257;
        font: 700 18px/3.2;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 14.3px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
        text-transform: uppercase;
        text-align: center;
    }

    /* top left*/
    .ribbon-top-left {
        top: -15px;
        left: -15px;
    }

    .ribbon-top-left::before,
    .ribbon-top-left::after {
        border-top-color: transparent;
        border-left-color: transparent;
    }

    .ribbon-top-left::before {
        top: 0px;
        right: 63px;
    }

    .ribbon-top-left::after {
        bottom: 73.5px;
        left: 0;
    }

    .ribbon-top-left span {
        right: -2.9em;
        top: 0em;
        transform: rotate(-45deg);
    }
}
@media only screen and (max-width: 578px) {
  .card-group {
    flex-wrap: wrap;
  }

  .card {
    border-radius: 0;
  }

  .vr {
    bottom: 10px;
  }
}

</style>
<div class="container">
        <div class="card-group mt-5">
            <div class="card d-flex flex-column justify-content-center align-items-center">
                <div class="card-body ">
                    <div class="elemen">
                        <div class="ribbon ribbon-top-left"><span>Special
                                OFFER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <h5 class="card-title" style="color: white; font-size: 90%"><b>Don't miss out on</b><br></h5>
                    <h5 class="card-title txt01c"><b>Unbeatable Flight Deals!</b></h5>
                </div>
            </div>
            <div class="vr" style="width: 0.1em;"></div>
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center"
                    style="position: relative; top: -11%;">
                    <h5 class="card-title"style="color: white;font-size: 90%;text-align: center;"><b>On every Booking</b><br></h5>
                    <h5 class="card-title txt01c"><b>Get Upto 30$ Off</b></h5>
                </div>
            </div>
        </div>
    </div>
