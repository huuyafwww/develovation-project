<?php

/**
 * Error Logger
 *
 * @param int $__level
 * @param string $__about
 * @param string $__file
 * @param string $__line
 */
function __error_logger(
    int $__level,
    string $__about,
    string $__file,
    string $__line
)
{
    error_log(
        "PHP ".__get_error_level($__level)
        .": ".$__about
        ." in ".$__file
        ." on line ".$__line
    );
}

/**
 * Error Handler
 *
 * @param int $__level
 * @param string $__about
 * @param string $__file
 * @param string $__line
 */
function __error_handler(
    int $__level,
    string $__about,
    string $__file,
    string $__line
)
{
    // Error Logger
    __error_logger(
        $__level,
        $__about,
        $__file,
        $__line
    );

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
                        <?php echo __get_error_level($__level); ?>
                    </td>
                </tr>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">
                        Message
                    </th>
                    <td>
                        <?php echo $__about; ?>
                    </td>
                </tr>
                <tr style="border-bottom: solid 2px #ccc;">
                    <th style="border-right: 2px solid #ddd;">
                        File
                    </th>
                    <td>
                        <?php echo $__file; ?>
                    </td>
                </tr>
                <tr>
                    <th style="border-right: 2px solid #ddd;">
                        Line Number
                    </th>
                    <td>
                        <?php echo $__line; ?>
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
 * @param int $__level
 * @return string
 */
function __get_error_level(
    int $__level
): string
{
    return constant("ERROR_LEVEL_".$__level);
}