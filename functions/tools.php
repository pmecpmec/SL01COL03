<?php

function changeColor()
{
  if (date('H') < 9) {


    echo "<style>
                body {
                    background-color: blue;
                }</style>";
  } else {
    echo "<style>
                body {
                    background-color: pink;
                }</style>";
  };
  echo "<div>Hello ADSD</div>";
};

function characterCounterType($value)
{
  echo $value . "<br>";
  echo strlen($value) . "<br>";
  echo gettype($value) . "<br>";
};


function randomValue($teams)
{
  $random = rand(0, array_rand($teams));
  echo $teams[$random];
};
