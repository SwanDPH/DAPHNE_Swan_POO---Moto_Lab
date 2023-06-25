<?php
class Moto
{
protected  $id;
protected  $marque;
protected  $modele;
protected  $type;
protected  $image;

public function __construct($id, $marque, $modele, $type, $image)
{
    $this->id = $id;
    $this->marque = $marque;
    $this->modele = $modele;
    $this->type = $type;
    $this->image = $image;
}


public function getId()
{
return $this->id;
}


public function setId($id)
{
$this->id = $id;

return $this;
}


public function getMarque()
{
return $this->marque;
}


public function setMarque($marque)
{
$this->marque = $marque;

return $this;
}


public function getModele()
{
return $this->modele;
}


public function setModele($modele)
{
$this->modele = $modele;

return $this;
}

public function getType()
{
return $this->type;
}

public function setType($type)
{
$this->type = $type;

return $this;
}

public function getImage()
{
    if ($this->image == null) {
        $this->image = "01_pasDePhoto.png";
    }
return $this->image;
}

public function setImage($image)
{
$this->image = $image;

return $this;
}
}
