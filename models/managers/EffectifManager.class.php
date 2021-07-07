<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Effectif.class.php';

class EffectifManager extends Model
{
    private $effectifs;

    public function addEffectif($effectif)
    {
        $this->effectifs[] = $effectif;
    }

    public function getEffectifs()
    {
        return $this->effectifs;
    }

    public function chargementEffectifs()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_effectif ORDER BY prenom");
        $req->execute();
        $effectifs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($effectifs as $effectif) {
            $e = new effectif(
                $effectif['id'],
                $effectif['nom'],
                $effectif['prenom'],
                $effectif['nom_naissance'],
                $effectif['genre'],
                $effectif['date_naissance'],
                $effectif['telephone'],
                $effectif['mail'],
                $effectif['securite_sociale'],
                $effectif['fonction'],
                $effectif['adresse'],
                $effectif['code_postal'],
                $effectif['ville'],
                $effectif['id_entreprise'],
                $effectif['id_opca'],
                $effectif['diplome'],
                $effectif['date_maj'],
                $effectif['date_creation'],
            );
            $this->addEffectif($e);
        }
    }

    public function getEffectifById($id)
    {
        foreach ($this->effectifs as $effectif) {
            if ($effectif->getId() === $id) {
                return $effectif;
            }
        }
    }

    public function getEffectifsByEntreprise($id_entreprise)
    {
        $effectifs_entreprise = [];
        foreach ($this->effectifs as $effectif) {
            if ($effectif->getId_Entreprise() === $id_entreprise) {
                $effectifs_entreprise[] = $effectif;
            }
        }
        return $effectifs_entreprise;
    }

    public function enregistrerEffectifDB($id_entreprise, $nom, $prenom, $nom_naissance, $genre, $date_naissance, $telephone, $mail, $securite_sociale, $fonction, $adresse, $code_postal, $ville, $diplome, $date_creation)
    {
        if (!empty($date_creation)) {

            $data = [
                'id_entreprise' => $id_entreprise,
                'nom' => $nom,
                'prenom' => $prenom,
                'nom_naissance' => $nom_naissance,
                'genre' => $genre,
                'date_naissance' => $date_naissance,
                'telephone' => $telephone,
                'mail' => $mail,
                'securite_sociale' => $securite_sociale,
                'fonction' => $fonction,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'ville' => $ville,
                'diplome' => $diplome,
                'date_maj' => $date_creation,
                'date_creation' => $date_creation,
            ];

            
            $req = $this->getBDD()->prepare("INSERT INTO fg_effectif (id_entreprise, nom,  prenom,  nom_naissance, genre, date_naissance,  telephone,  mail,  securite_sociale,  fonction,  adresse,  code_postal,  ville,  diplome,  date_maj,  date_creation)  VALUES  (:id_entreprise,  :nom,  :prenom,  :nom_naissance, :genre, :date_naissance, :telephone,  :mail,  :securite_sociale,  :fonction,  :adresse,  :code_postal,  :ville,  :diplome,  :date_maj,  :date_creation)");
            $res = $req->execute($data);
            $req->closeCursor();
            return $res;
        }
    }

    public function supprimerEffectifDB($id_effectif)
    {
        $data = ['id_effectif' => $id_effectif,];
        $req = $this->getBDD()->prepare("DELETE FROM fg_effectif WHERE id = :id_effectif");
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
        // OK
    }


    public function getEffectieById($id_effectif)
    {
        foreach ($this->effectifs as $effectif) {
            if ($effectif->getId() === $id_effectif) {
                return $effectif;
            }
        }
    }

    public function actualiserEffectifDB($id_effectif, $date_creation, $nom, $prenom, $nom_naissance, $genre, $date_naissance, $fonction, $securite_sociale, $opca, $diplome, $adresse, $code_postal, $ville, $telephone, $mail)
    {
        $date_maj = getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
        $data = [
            'id_effectif' => $id_effectif,
            'date_creation' => $date_creation,
            'nom' => $nom,
            'prenom' => $prenom,
            'nom_naissance' => $nom_naissance,
            'genre' => $genre,
            'date_naissance' => $date_naissance,
            'fonction' => $fonction,
            'securite_sociale' => $securite_sociale,
            'opca' => $opca,
            'diplome' => $diplome,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'telephone' => $telephone,
            'mail' => $mail,
            'date_maj' => $date_maj,
        ];
        $req = $this->getBDD()->prepare(
        "UPDATE fg_effectif
        SET
        date_creation = :date_creation,
        nom = :nom,
        prenom = :prenom,
        nom_naissance = :nom_naissance,
        genre = :genre,
        date_naissance = :date_naissance,
        fonction = :fonction,
        securite_sociale = :securite_sociale,
        id_opca = :opca,
        diplome = :diplome,
        adresse = :adresse,
        code_postal = :code_postal,
        ville = :ville,
        telephone = :telephone,
        mail = :mail,
        date_maj = :date_maj
        WHERE id = :id_effectif;"
        );
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }
}
