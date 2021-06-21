<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Entreprise.class.php';
class EntrepriseManager extends Model
{
    private $entreprises;

    public function addEntreprise($entreprise)
    {
        $this->entreprises[] = $entreprise;
    }

    public function getEntreprises()
    {
        return $this->entreprises;
    }

    public function chargementEntreprises()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_entreprise ORDER BY enseigne ASC");
        $req->execute();
        $entreprises = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($entreprises as $entreprise) {
            $e = new Entreprise(
                $entreprise['id'],
                $entreprise['enseigne'],
                $entreprise['siret'],
                $entreprise['code_naf'],
                $entreprise['forme_juridique'],
                $entreprise['activite'],
                $entreprise['adresse'],
                $entreprise['code_postal'],
                $entreprise['ville'],
                $entreprise['date_maj'],
                $entreprise['date_creation'],
                $entreprise['mail'],
                $entreprise['telephone'],
            );
            $this->addEntreprise($e);
        }
    }

    public function getEntrepriseById($id)
    {
        foreach ($this->entreprises as $entreprise) {
            if ($entreprise->getId() === $id) {
                return $entreprise;
            }
        }
    }

    public function enregistrerEntrepriseDB($enseigne, $siret, $code_naf, $forme_juridique, $activite, $adresse, $code_postal, $date_creation, $ville, $telephone, $mail)
    {
        if (!empty($enseigne) && !empty($date_creation)) {

            $data = [
                'enseigne' => $enseigne,
                'siret' => $siret,
                'code_naf' => $code_naf,
                'forme_juridique' => $forme_juridique,
                'activite' => $activite,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'date_creation' => $date_creation,
                'date_maj' => $date_creation,
                'ville' => $ville,
                'telephone' => $telephone,
                'mail' => $mail
            ];
            $req = $this->getBDD()->prepare("INSERT INTO fg_entreprise (enseigne, siret, code_naf, forme_juridique, activite, adresse, code_postal, date_creation, date_maj, ville, telephone, mail) VALUES (:enseigne, :siret, :code_naf, :forme_juridique, :activite, :adresse, :code_postal, :date_creation, :date_maj, :ville, :telephone, :mail)");
            $req->execute($data);
            $req->closeCursor();
        }
    }

    public function supprimerEntrepriseDB($id_entreprise)
    {
        $data = ['id_entreprise' => $id_entreprise,];
        $req = $this->getBDD()->prepare("DELETE FROM fg_entreprise WHERE id = :id_entreprise");
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
        // OK
    }

    public function actualiserEntrepriseDB($id_entreprise, $enseigne, $siret, $code_naf, $forme_juridique, $activite, $adresse, $code_postal, $date_creation, $ville, $telephone, $mail)
    {
        $date_maj = getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
        $data = [
            'id_entreprise' => $id_entreprise,
            'enseigne' => $enseigne,
            'siret' => $siret,
            'code_naf' => $code_naf,
            'forme_juridique' => $forme_juridique,
            'activite' => $activite,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'date_creation' => $date_creation,
            'ville' => $ville,
            'telephone' => $telephone,
            'mail' => $mail,
            'date_maj' => $date_maj,
        ];
        $req = $this->getBDD()->prepare(
        "UPDATE fg_entreprise
        SET
        enseigne = :enseigne,
        siret = :siret,
        code_naf = :code_naf,
        forme_juridique = :forme_juridique,
        activite = :activite,
        adresse = :adresse,
        code_postal = :code_postal,
        date_creation = :date_creation,
        ville = :ville,
        telephone = :telephone,
        mail = :mail,
        date_maj = :date_maj
        WHERE id = :id_entreprise"
        );
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }
}
