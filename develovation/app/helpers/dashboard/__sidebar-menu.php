<?php

/**
 * Get Sidebar Menu
 */
function __get_sidebar()
{
    require(SIDEBAR_MENU_CONFIG_FILE);
    foreach(
        $__sidebar_config
        as
        $slug
        =>
        $__sidebar_item
    )
    {
        call_user_func_array(
            "__get_sidebar_".$__sidebar_item["type"],
            [
                $slug,
                $__sidebar_item
            ]
        );
    }
}

/**
 * Get Normal Sidebar Item
 *
 * @param string $slug
 * @param array $__sidebar_item
 */
function __get_sidebar_normal(
    string $slug,
    array $__sidebar_item
)
{
    ?>
    <!-- Menu-Item -->
    <li
        class="<?php __is_sidebar_item_active($slug); ?>"
    >

        <!-- Menu-Title -->
        <a
            class="nav-link"
            href="<?php __get_http_url($__sidebar_item["href"]); ?>"
        >

            <!-- Menu-Icon -->
            <i
                class="fas fa-<?php echo $__sidebar_item["icon"]; ?>"
            >
            </i> <!-- /Menu-Icon -->

            <!-- Menu-Title -->
            <span>
                <?php echo $__sidebar_item["label"]; ?>
            </span><!-- /Menu-Title -->

        </a><!-- /Menu-Title -->

    </li><!-- /Menu-Item -->
    <?php
}

/**
 * Get Parent Sidebar Item
 *
 * @param string $slug
 * @param array $__sidebar_item
 */
function __get_sidebar_parent(
    string $slug,
    array $__sidebar_item
)
{
    ?>
    <!-- Menu-Item -->
    <li
        class="nav-item dropdown<?php __is_sidebar_item_active($slug); ?>"
    >

        <!-- Menu-Title -->
        <a href="#" class="nav-link has-dropdown">

            <!-- Menu-Icon -->
            <i
                class="fas fa-<?php echo $__sidebar_item["icon"]; ?>"
            >
            </i><!-- /Menu-Icon -->

            <!-- Menu-About -->
            <span>
                <?php echo $__sidebar_item["label"]; ?>
            </span><!-- /Menu-About -->

        </a><!-- /Menu-Title -->

        <!-- Dropdown-Menu -->
        <ul class="dropdown-menu">
            <?php
                foreach(
                    $__sidebar_item["child"]
                    as
                    $__child_href
                    =>
                    $__child_item
                )
                {
                    __get_sidebar_child(
                        $slug.$__child_href,
                        $__child_item
                    );
                }
            ?>
        </ul><!-- /Dropdown-Menu -->

    </li><!-- /Menu-Item -->
    <?php
}

/**
 * Get Child Sidebar Item
 *
 * @param string $__child_href
 * @param array $__child_item
 */
function __get_sidebar_child(
    string $__child_href,
    array $__child_item
)
{
    ?>
    <!-- Dropdown-Item -->
    <li
        class="<?php __is_sidebar_item_active($__child_href); ?>"
    >

        <!-- Item-Link -->
        <a
            class="nav-link"
            href="<?php echo __get_http_url($__child_href); ?>"
        >

            <!-- Item-About -->
            <?php echo $__child_item["label"]; ?><!-- /Item-About -->

        </a><!-- /Item-Link -->

    </li><!-- /Dropdown-Item -->
    <?php
}

/**
 * Get Child Sidebar Item
 *
 * @param string $__search_uri
 */
function __is_sidebar_item_active(
    string $__search_uri
)
{
    echo
        __is_strpos(NOW_URI,$__search_uri)
        ? " active"
        : ""
    ;
}