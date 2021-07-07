<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/OF.class.php';

class OFManager extends Model
{
    private $ofs;

    public function addOf($of)
    {
        $this->ofs[] = $of;
    }

    public function getOfs()
    {
        return $this->ofs;
    }

    public function chargementOfs()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_organisme_formation ORDER BY nom_commercial");
        $req->execute();
        $ofs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($ofs as $of) {
            $o = new OF(
                $of['id'],
                $of['nom_commercial'],
                $of['siret'],
                $of['adresse'],
                $of['code_postal'],
                $of['ville'],
                $of['telephone'],
                $of['mail'],
                $of['code_ape'],
                $of['numero_declaration'],
                $of['discipline'],
                $of['numero_qualiopi'],
                $of['tva'],
                $of['date_maj'],
                $of['date_creation'],
            );
            $this->addOf($o);
        }
    }

    public function getOfById($id_of)
    {
        foreach ($this->ofs as $of) {
            if ($of->getId() === $id_of) {
                return $of;
            }
        }
    }

    public function enregistrerOfDB($nom_commercial, $siret, $code_ape, $numero_declaration, $discipline, $numero_qualiopi, $tva, $adresse, $code_postal, $ville, $telephone, $mail, $date_creation)
    {
        if (!empty($nom_commercial) && !empty($date_creation)) {

            $data = [
                'nom_commercial' => $nom_commercial,
                'siret' => $siret,
                'code_ape' => $code_ape,
                'numero_declaration' => $numero_declaration,
                'discipline' => $discipline,
                'numero_qualiopi' => $numero_qualiopi,
                'tva' => $tva,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'ville' => $ville,
                'telephone' => $telephone,
                'mail' => $mail,
                'date_creation' => $date_creation,
                'date_maj' => $date_creation,
            ];
            $req = $this->getBDD()->prepare("INSERT INTO fg_organisme_formation (nom_commercial, siret, code_ape, numero_declaration, discipline, numero_qualiopi,  tva, adresse, code_postal, ville, telephone, mail, date_creation, date_maj) VALUES (:nom_commercial, :siret, :code_ape, :numero_declaration, :discipline, :numero_qualiopi,  :tva, :adresse, :code_postal, :ville, :telephone, :mail, :date_creation, :date_maj)");
            $req->execute($data);
            $req->closeCursor();
        }
    }



    public function supprimerOfDB($id_of)
    {
        $data = ['id_of' => $id_of,];
        $req = $this->getBDD()->prepare("DELETE FROM fg_organisme_formation WHERE id = :id_of");
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
        // OK
    }

    public function actualiserOfDB($id_of, $date_creation, $nom_commercial, $siret, $code_ape, $numero_declaration, $discipline, $numero_qualiopi, $tva, $adresse, $code_postal, $ville, $telephone,$mail)
    {
        $date_maj = getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
        $data = [
            'id_of' => $id_of,
            'date_creation' => $date_creation,
            'nom_commercial' => $nom_commercial,
            'siret' => $siret,
            'code_ape' => $code_ape,
            'numero_declaration' => $numero_declaration,
            'discipline' => $discipline,
            'numero_qualiopi' => $numero_qualiopi,
            'tva' => $tva,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'telephone' => $telephone,
            'mail' => $mail,
            'date_maj' => $date_maj,
        ];
        $req = $this->getBDD()->prepare(
        "UPDATE fg_organisme_formation
        SET
        date_creation = :date_creation,
        nom_commercial = :nom_commercial,
        siret = :siret,
        code_ape = :code_ape,
        numero_declaration = :numero_declaration,
        discipline = :discipline,
        numero_qualiopi = :numero_qualiopi,
        tva = :tva,
        adresse = :adresse,
        code_postal = :code_postal,
        ville = :ville,
        telephone = :telephone,
        mail = :mail,
        date_maj = :date_maj
        WHERE id = :id_of"
        );
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }
}
