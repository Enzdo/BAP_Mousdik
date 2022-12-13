<?php


class Connection{

    public PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:dbname=bap_mousdik;host=127.0.0.1','root','');
    }

    public function insertPiano(Piano $piano)
    {
        $query = 'INSERT INTO piano (name, price, brand, img)
                VALUES (:name, :price, :brand, :img)';

        $statement= $this->pdo->prepare($query);

        return $statement->execute([
            'name'=>$piano->name,
            'price'=>$piano->price,
            'brand'=>$piano->brand,
            'img'=>$piano->img,

        ]);
    }

    public function getAllPiano():array{
        $sth = $this->pdo->prepare("SELECT * FROM piano");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);


    }

    public function deletePiano(int $id):bool{
        $query = 'DELETE FROM piano
                  WHERE id=:id';

        $sth=$this->pdo->prepare($query);

        return $sth->execute([
            'id'=>$id,
        ]);
    }
/*
    public function isExisting(string $pw, string $email):array{
        $pass = md5($pw. 'UN_PETIT_GRAIN2SABLE');

        $sth = $this->pdo->prepare('SELECT * FROM user
                                    WHERE email=:email AND password=:pass');
        $sth->execute(['email'=>$email, 'pass'=>$pass]);

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function antiDoppelganger($new):bool{

        $sth = $this->pdo->prepare("SELECT email FROM user
                                    WHERE email=:new");
        $sth->execute(['new'=>$new]);
        $oui=$sth->fetchAll(PDO::FETCH_ASSOC);
        if(empty($oui)){
            $isValid = true;
        }else{
            $isValid = false;
        }

        return $isValid;
    }*/
}