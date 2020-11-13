<?php

  putenv('DISPLAY_ERRORS_DETAILS=' . false);

  putenv("SITE_NAME=" . "Alucar");
  putenv("BASE_PATH=" . "");
  putenv("SITE_URL=" . getenv("BASE_PATH"));

   // database
   putenv("DATABASE=" . "<database>");
   putenv("DB_USER=" . "<user>");
   putenv("DB_PASSWORD=" . "<password>");
   putenv("DB_HOST=" . "<host>");
   putenv("DB_PORT=" . "<port>");