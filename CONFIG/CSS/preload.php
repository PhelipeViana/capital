<!-- TEM QUE TER BOOSTRAP -->
<style>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background: none repeat scroll 0 0 #fff;
        background: none repeat scroll 0 0 #f9f9f9;
    }

    .sk-spinner-wordpress.sk-spinner {
        background-color: #3366CC;
        width: 30px;
        height: 30px;
        border-radius: 30px;
        position: relative;
        -webkit-animation: sk-innerCircle 1s linear infinite;
        animation: sk-innerCircle 1s linear infinite;
    }

    .sk-spinner-wordpress .sk-inner-circle {
        display: block;
        background-color: #fff;
        width: 8px;
        height: 8px;
        position: absolute;
        border-radius: 8px;
        top: 5px;
        left: 5px;
    }

    @-webkit-keyframes sk-innerCircle {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);

        }
    }

    @keyframes sk-innerCircle {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<script>
    $(window).load(function() {
        $('.preloader').delay(1000).fadeOut("slow");
    });
</script>

<!-- html
<div class="preloader">
				<div class="sk-spinner sk-spinner-wordpress">
					<span class="sk-inner-circle"></span>
				</div>
			</div> -->