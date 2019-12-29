<?php

class Player
{
  /**
   * Returns the current version of the deployed bot.
   * Useful to get debug information.
   */
  public function getVersion () {
    return "Default php-player";
  }

  /**
   * Returns the amount for the next bet.
   * Return 0 to fold.
   */
  public function bet ($gamestate) {
    $tournamentId = $gamestate["tournamentId"];
    error_log("Playing game $tournamentId");
    return 0;
  }
}
