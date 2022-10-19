<?php
  $Connect = pg_connect("postgres://tdirubmabaxdiv:d4a7a03db6eb166346affc0c52b3137ec57c3ec71191a33d9034c78f510ad56d@ec2-52-200-5-135.compute-1.amazonaws.com:5432/d8vi3jh9nqrjd8");
  if (!$Connect) {
      die("Connection failed");
  }
?>