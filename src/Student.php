<?php

class Student extends User
{
    public string $group;

    public string $rank;

    public function __construct(int $id,
                                string $name,
                                string $email,
                                string $phone, string $group,
                                string $rank)
    {
        parent::__construct($id, $name, $email, $phone);
        $this->group = $group;
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getRank(): string
    {
        return $this->rank;
    }


}