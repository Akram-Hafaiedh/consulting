
<style>
    :root {
      --light-gray: #eceef1;
      --gray: #a6a4b2;
      --slate: #595666;
      --turquoise: #DBC8FD;
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: var(--light-gray);
      font-family: "Slabo 27px", serif;
      color: var(--slate);
    }

    .wrapper {
      margin: 5em auto;
      max-width: 1000px;
      background-color: #fff;
      box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
    }

    .header {
      padding: 30px 30px 0;
      text-align: center;
    }

    .header__title {
      margin: 0;
      text-transform: uppercase;
      font-size: 2.5em;
      font-weight: 500;
      line-height: 1.1;
    }

    .header__subtitle {
      margin: 0;
      font-size: 1.5em;
      color: var(--gray);
      font-family: "Yesteryear", cursive;
      font-weight: 500;
      line-height: 1.1;
    }

    .cards {
      padding: 15px;
      display: flex;
      flex-flow: row wrap;
    }

    .card {
      margin: 15px;
      width: calc((100% / 3) - 30px);
      transition: all 0.2s ease-in-out;
    }

    @media screen and (max-width: 991px) {
      .card {
        width: calc((100% / 2) - 30px);
      }
    }

    @media screen and (max-width: 767px) {
      .card {
        width: 100%;
      }
    }

    .card:hover .card__inner {
      background-color: var(--turquoise);
      transform: scale(1.05);
    }

    .card__inner {
      width: 100%;
      padding: 30px;
      position: relative;
      cursor: pointer;
      background-color: var(--gray);
      color: var(--light-gray);
      font-size: 1.5em;
      text-transform: uppercase;
      text-align: center;
      transition: all 0.2s ease-in-out;
    }

    .card__inner:after {
      transition: all 0.3s ease-in-out;
    }

    .card__inner .fa {
      width: 100%;
      margin-top: 0.25em;
    }

    .card__expander {
      transition: all 0.2s ease-in-out;
      background-color: var(--slate);
      width: 100%;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      text-transform: uppercase;
      color: var(--light-gray);
      font-size: 1.5em;
    }

    .card__expander .fa {
      font-size: 0.75em;
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }

    .card__expander .fa:hover {
      opacity: 0.9;
    }

    .card.is-collapsed .card__inner:after {
      content: "";
      opacity: 0;
    }

    .card.is-collapsed .card__expander {
      max-height: 0;
      min-height: 0;
      overflow: hidden;
      margin-top: 0;
      opacity: 0;
    }

    .card.is-expanded .card__inner {
      background-color: var(--turquoise);
    }

    .card.is-expanded .card__inner:after {
      content: "";
      opacity: 1;
      display: block;
      height: 0;
      width: 0;
      position: absolute;
      bottom: -30px;
      left: calc(50% - 15px);
      border-left: 15px solid transparent;
      border-right: 15px solid transparent;
      border-bottom: 15px solid #333a45;
    }

    .card.is-expanded .card__inner .fa:before {
      content: "\f115";
    }

    .card.is-expanded .card__expander {
      max-height: 1000px;
      min-height: 200px;
      overflow: visible;
      margin-top: 30px;
      opacity: 1;
    }

    .card.is-expanded:hover .card__inner {
      transform: scale(1);
    }

    .card.is-inactive .card__inner {
      pointer-events: none;
      opacity: 0.5;
    }

    .card.is-inactive:hover .card__inner {
      background-color: var(--gray);
      transform: scale(1);
    }

    .text-right {
    text-align: right;
    margin-top: 10px; /* Adjust margin as needed */
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border: none;
    border-radius: 4px;
}

.btn-primary {
    color: #fff;
    background-color: #DBC8FD;
    border-color: #DBC8FD;
}
            </style>


        @extends('layouts.app')

        @section('title', 'Home')

        @section('content')
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class="text-right">
                    <a href="{{ route('quiz.create') }}" class="btn btn-primary">Ajouter</a>
                </div>

                <div class="wrapper">

                    <div class="header">
                      <h1 class="header__title">Liste Des Quizs</h1>
                    </div>

                    <div class="cards">
              @foreach($quizs as $quiz)
                      <div class=" card [ is-collapsed ] ">
                        <div class="card__inner [ js-expander ]">
                          <span>{{$quiz->title}}</span>
                          <i class="fa fa-folder-o"></i>
                        </div>
                        <div class="card__expander">
                          <i class="fa fa-close [ js-collapser ]"></i>
                          {{    $quiz->type }} <br>
                          {{    $quiz->description }} <br>
                          {{    $quiz->time }} minutes <br>
                          {{    $quiz->number_of_question }}

                        </div>
                      </div>
@endforeach


                    </div>

                  </div>




                      </div>



                </div>
            </div>
        </div>
        @endsection

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-expander').click(function() {
              var $thisCell = $(this).closest('.card');

              if ($thisCell.hasClass('is-collapsed')) {
                $('.card').not($thisCell).removeClass('is-expanded').addClass('is-collapsed is-inactive');
                $thisCell.removeClass('is-collapsed').addClass('is-expanded');

                if ($('.card').not($thisCell).hasClass('is-inactive')) {
                  // do nothing
                } else {
                  $('.card').not($thisCell).addClass('is-inactive');
                }
              } else {
                $thisCell.removeClass('is-expanded').addClass('is-collapsed');
                $('.card').not($thisCell).removeClass('is-inactive');
              }
            });

            $('.js-collapser').click(function() {
              var $thisCell = $(this).closest('.card');
              $thisCell.removeClass('is-expanded').addClass('is-collapsed');
              $('.card').not($thisCell).removeClass('is-inactive');
            });
          });
        </script>
