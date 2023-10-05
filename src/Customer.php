<?php

class Customer extends User
{
    public string $address;

    public function __construct(int $id,
                                string $name,
                                string $email,
                                string $phone,
                                string $address)
    {
        // tu khoa parent -> chi ve lop cha
        parent::__construct($id, $name, $email, $phone);
        // khai bao thuoc tinh rieng lop con
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    // ghi de phuong thu getInfo cua lop cha -> the hien tinh da hinh
    public function getInfo(): string
    {
        return "Thong tin khach hang " . parent::getInfo() . "-Address: $this->address";
    }
}