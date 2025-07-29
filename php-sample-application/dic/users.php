<?php

return new Service\UsersService(
    require "config/db-connection-container.php"
);
