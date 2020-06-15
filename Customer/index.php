<ul class="circles">
        <h2>Welcome to </h2>
        <h3 class="loading-text">
          <span>A</span><span>P</span><span>P</span><span>O</span><span>I</span>
        </h3>
        <a href="Home.php" class="button button-float ">Get Started</a>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
</ul>

<style>
    h2{
      font-family: 'Lobster', cursive;
      font-size: 50px;
      color: #380036;
      margin-bottom: 0px;
      margin-top: 150px;
      text-align: center;
      padding:0;
    }
    h3{
      color: #fff;
      font-weight: 900;
      text-shadow: 2px 2px 4px #ffffff;
      margin: 0;
      text-align: center;
    }
    span{
      font-size: 250px;
      margin: 0;
      padding:0;
    }
    .loading-text{
      .vertical-center-align;
      .normal-font-weight;
      .block-element;
      .text-align-center;
      width:100%;
      font-size: 4rem;
      animation-delay: 1.5s;
      animation-duration: 1s;
      animation-fill-mode: forwards;
    }
    .loading-text span {
        .inline-element;
        .white-color-font;
        padding: 0 .4%;
        transform: translateX(-2rem);
        -webkit-transform: translateX(-2rem);
        opacity: 0;
        animation-delay: .5s;
        animation-duration: .3s;
        animation-fill-mode: forwards;
        animation-name: loadingAnim;
    }

    .loading-text span:nth-child(2) {
        animation-delay: .7s;
    }

    .loading-text span:nth-child(3) {
        animation-delay: .9s;
    }

    .loading-text span:nth-child(4) {
        animation-delay: 1.1s;
    }

    .loading-text span:nth-child(5) {
        animation-delay: 1.3s;
    }
    @keyframes loadingAnim {
        0% {
            transform: translateX(-2rem);
            -webkit-transform: translateX(-2rem);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            -webkit-transform: translateX(0);
            opacity: 1;
        }
    }
    .button {
      position: relative;
      color: white;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      letter-spacing: 1px;
      border: 2px solid white;
      border-radius: 1000px;
      padding: 10px 20px;
      margin: 40px;
      font-size: 50px;
      box-shadow: 0 2px 5px 0 rgba(3,6,26,0.15);
      transition: .5s all ease-in-out;
      annimarion delay:3s;
      float: right;
      margin-right:100px;
    }
    .button:hover {
      cursor: pointer;
      box-shadow: 0 0 10px 40px  #fff inset, 0 0 10px 4px  #3498db;
      color: #0CBABA;
      transform:scale(1.2,1.2);
    }

    .button-float {
      animation: float 5.5s linear alternate ;
    }

    @keyframes float {
    	0% {
        transform: translateY(800px);
      }
      50% {
        transform: translateY(0px);
        transform: scale(1);
      }
    	60% {
    		transform: scale(0.9);
    	}
    	65% {
    		transform: scale(1.15);
    	}
    	70% {
    		transform: scale(1.15) rotate(-5deg);
    	}
    	75% {
    		transform: scale(1.15) rotate(5deg);
    	}
    	80% {
    		transform: scale(1.15) rotate(-3deg);
    	}
    	85% {
    		transform: scale(1.15) rotate(2deg);
    	}
    	90% {
    		transform: scale(1.15) rotate(0);
    	}
    }

    body{
        background: linear-gradient( 135deg,#380036,#5C258D,#4776e6,#4776e6,#0CBABA);
        width: 100%;
        height:100vh;
    }

    body{
        position:relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    body li{
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -250px;

    }

    body li:nth-child(1){
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }


    body li:nth-child(2){
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }

    body li:nth-child(3){
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }

    body li:nth-child(4){
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }

    body li:nth-child(5){
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    body li:nth-child(6){
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }

    body li:nth-child(7){
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }

    body li:nth-child(8){
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }

    body li:nth-child(9){
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }

    body li:nth-child(10){
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }
    body li:nth-child(11){
        left: 10%;
        width: 180px;
        height: 180px;
        animation-delay: 0s;
        animation-duration: 10s;
    }
    body li:nth-child(12){
        left: 25%;
        width: 50px;
        height: 50px;
        animation-delay: 2s;
        animation-duration: 21s;
    }
    body li:nth-child(13){
        left: 65%;
        width: 120px;
        height: 120px;
        animation-delay: 0s;
        animation-duration: 8s;
    }



    @keyframes animate {

        0%{
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100%{
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }

    }

</style>
