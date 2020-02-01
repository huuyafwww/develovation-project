<?php

/**
 * Error Logger
 *
 * @param int $level
 * @param string $about
 * @param string $file
 * @param string $line
 */
function __error_logger($level,$about,$file,$line)
{
    $error_level = __get_error_level($level);
    $error_log = 
        "PHP ".$error_level
        .": ".$about
        ." in ".$file
        ." on line ".$line
    ;
    error_log($error_log);
}

/**
 * Error Handler
 *
 * @param int $level
 * @param string $about
 * @param string $file
 * @param string $line
 */
function __error_handler($level,$about,$file,$line)
{
    __error_logger($level,$about,$file,$line);
    $error_level = __get_error_level($level);
    ?>
    <div style="border:dotted 2px #000;padding:1.5%;">
        <h3 style="margin:0 0 .3em 0;text-align: center;color:red;">
            A PHP error has occurred.
        </h3>
        <table style="width:100%;border-collapse: collapse; border: solid 2px #ddd;border-radius: 4px;text-align: center;">
            <tbody>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">
                        Severity
                    </th>
                    <td>
                        <?php echo $error_level; ?>
                    </td>
                </tr>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">
                        Message
                    </th>
                    <td>
                        <?php echo $about; ?>
                    </td>
                </tr>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">
                        File
                    </th>
                    <td>
                        <?php echo $file; ?>
                    </td>
                </tr>
                <tr>
                    <th style="border-right: 2px solid #ddd;">
                        Line Number
                    </th>
                    <td>
                        <?php echo $line; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * Get Error Level
 *
 * @param int $level
 * @return string
 */
function __get_error_level($level)
{
    return constant("ERROR_LEVEL_".$level);
}