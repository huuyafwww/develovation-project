<?php

/**
 * Coordination of Action And Hook
 */
class __Action_Hook{

    protected $hooks = [];

    /**
     * Get the All Hooks
     * 
     * @access public
     * @return array
     */
    public function __get_hooks(){
        return $this->hooks;
    }

    /**
     * Any Registered Hook Info Returns
     *
     * @access public
     * @param string $hook_name
     * @return array|bool
     */
    public function __get_hook(
        string $hook_name
    )
    {
        return 
            $this->__hook_exists($hook_name) ?
            $this->hooks[
                $hook_name
            ] :
            false
        ;
    }

    /**
     * Hook Exists Judge
     *
     * @access private
     * @param string $hook_name
     * @return bool
     */
    private function __hook_exists(
        string $hook_name
    ): bool
    {
        return 
            isset(
                $this->hooks[
                    $hook_name
                ]
            )
        ;
    }

    /**
     * Register Processing to Queue
     *
     * @access public
     * @param string $hook_name
     * @param string $action_name
     */
    public function __add_hook(
        string $hook_name,
        string $action_name
    )
    {
        $this->hooks[$hook_name][] = 
        [
            "name" => $action_name,
        ];
    }

    /**
     * Execute Action Registered in Hook
     *
     * @access public
     * @param string $hook_name
     */
    public function __do(
        string $hook_name,
        $argv =  NULL
    )
    {
        $argv = $hook_name($argv);
        foreach(
            $this->__get_hook($hook_name)
            as
            $action
        )
        {
            $action["name"]($argv);
        }
    }

}