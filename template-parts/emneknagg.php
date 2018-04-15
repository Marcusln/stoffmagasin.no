<?php

              if ( in_category( 'leserinnlegg' ) ) {
              // echo "<span style=\"background-color: black; color: white; padding: 5px;\">" . 'LESERINNLEGG' . '</span>';
              echo "LESERINNLEGG";
              }
              elseif ( in_category('leder') ) {
              echo "LEDERSTOFF";
              }
              elseif ( in_category( 'kommentar' ) ) {
              echo "KOMMENTARSTOFF";
              }
              elseif ( in_category( 'masterspalten' ) ) {
              echo "MASTERSTOFF";
              }
              elseif ( in_category('lost-gjenfortalt') ) {
              echo "LØST GJENFORTALT";
              }
              elseif ( in_category('samfunn') ) {
              echo "SAMFUNNSSTOFF";
              } elseif ( in_category('film') ) {
              echo "FILMSTOFF";
              } elseif ( in_category('anmeldelser') ) {
              echo "ANMELDELSE";
              } elseif ( in_category('musikk') ) {
              echo "MUSIKKSTOFF";
              } elseif ( in_category('kunst') ) {
              echo "KUNSTSTOFF";
              } elseif ( in_category('kultur') ) {
              echo "KULTURSTOFF";
              }
              elseif ( in_category('økonomi') ) {
              echo "ØKONOMISTOFF";
              }
              elseif ( in_category('quiz') ) {
              echo "QUIZSTOFF";
              }
              elseif ( in_category('under-beltestedet') ) {
              echo "UNDER BELTESTEDET";
              }
              elseif ( in_category('bergen-revels') ) {
              echo "BERGEN REVELS";
              }
              elseif ( in_category('tre-kule-folk') ) {
              echo "LESESTOFF";
              }
              else {
              echo "LESESTOFF";
              }

              /* or
              elseif ( in_category( array( 'manedens-debutant', 'kultur' ) ) ) {
              echo "MÅNEDENS DEBUTANT";
              }
              */