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

    public function getNewPiano():array{
        $sth = $this->pdo->prepare("SELECT * FROM piano
                                          ORDER BY `date` DESC");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOldPiano():array{
        $sth = $this->pdo->prepare("SELECT * FROM piano
                                          ORDER BY `date` ASC");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLowPiano():array{
        $sth = $this->pdo->prepare("SELECT * FROM piano
                                          ORDER BY `price` ASC");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHightPiano():array{
        $sth = $this->pdo->prepare("SELECT * FROM piano
                                          ORDER BY `price` DESC");
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








    public function insertAvis(Avis $avis)
    {
        $query = 'INSERT INTO review (name, message, score)
                VALUES (:name, :message, :score)';

        $statement= $this->pdo->prepare($query);

        return $statement->execute([
            'name'=>$avis->name,
            'message'=>$avis->message,
            'score'=>$avis->score,

        ]);
    }

    public function getAllAvis():array{
        $sth = $this->pdo->prepare("SELECT * FROM review");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);


    }

    public function deleteAvis(int $id):bool{
        $query = 'DELETE FROM review
                  WHERE id=:id';

        $sth=$this->pdo->prepare($query);

        return $sth->execute([
            'id'=>$id,
        ]);
    }

}