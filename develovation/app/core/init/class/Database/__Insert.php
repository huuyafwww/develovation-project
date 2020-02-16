<?php

trait __Insert{

    /**
     * SQL Query for Insert
     *
     * @access public
     * @param string $__table
     * @param array $__datas
     */
    public function __insert(
        string $__table,
        array $__datas
    )
    {
        // Do Init
        $this->__do_init($__table,$__datas);

        // Get Insert Columns Prefix
        $this->__get_insert_prefix_cols();

        // Create Insert Query
        $this->__get_insert_query();

        // Run Query
        $this->__run_query();
    }

    /**
     * Create Insert Query
     *
     * @access private
     */
    private function __get_insert_query()
    {
        $this->__query = 
            "INSERT INTO ".$this->__table.
            "(".$this->__cols.") 
            VALUES ".$this->__prefix_cols
        ;
    }

    /**
     * Get Insert Columns Prefix
     *
     * @access private
     */
    private function __get_insert_prefix_cols()
    {
        $this->__prefix_cols = 
            "':".
            implode(
                "',':",
                array_keys(
                    $this->__datas
                )
            ).
            "'"
        ;
    }
}