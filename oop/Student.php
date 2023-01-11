Class Student {
    private $name;
    private $address;
    private $contact;

    function _construct() {
        $this->$name = "name_not_passed";
        $this->$address = "address_not passed";
        $this->$contact = "contact_not_passed";
    }

    public function setName($name) {
        $this->name = $name;        
    }

    public function getName() {
        return $this->name;
    }
}