<?php

return new Service\TweetsService(
    require "config/db-connection-container.php"
);
