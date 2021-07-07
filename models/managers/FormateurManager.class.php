<?php
require_once 'models/classes/Model.class.php';
require_once 'models/classes/Formateur.class.php';
class FormateurManager extends Model
{
    private $formateurs;

    public function addFormateur($formateur)
    {
        $this->formateurs[] = $formateur;
    }

    public function getFormateurs()
    {
        return $this->formateurs;
    }

    public function getFormateurById($id)
    {
        foreach ($this->formateurs as $formateur) {
            if ($formateur->getId() === $id) {
                return $formateur;
            }
        }
    }

    public function chargementFormateurs()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM fg_formateur ORDER BY date_creation DESC");
        $req->execute();
        $formateurs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($formateurs as $formateur) {
            $f = new Formateur(
                $formateur['id'],
                $formateur['nom'],
                $formateur['prenom'],
                $formateur['adresse'],
                $formateur['code_postal'],
                $formateur['ville'],
                $formateur['telephone'],
                $formateur['mail'],
                $formateur['id_organisme_formation'],
                $formateur['discipline'],
                $formateur['code_naf'],
                $formateur['numero_qualiopi'],
                $formateur['tva'],
                $formateur['date_maj'],
                $formateur['date_creation'],
            );
            $this->addFormateur($f);
        }
    }

    public function getFormateursByOf($id_of)
    {
        $formateurs_of = [];
        foreach ($this->formateurs as $formateur) {
            if ($formateur->getId_Organisme_Formation() === $id_of) {
                $formateurs_of[] = $formateur;
            }
        }
        return $formateurs_of;
    }

    public function enregistrerFormateurDB($id_organisme_formation, $nom, $prenom, $discipline, $adresse, $code_postal, $ville, $telephone, $mail, $code_naf, $numero_qualiopi, $tva, $date_creation)
    {
        if (!empty($date_creation)) {

            $data = [
                'id_organisme_formation' => $id_organisme_formation,
                'nom' => $nom,
                'prenom' => $prenom,
                'discipline' => $discipline,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'ville' => $ville,
                'telephone' => $telephone,
                'mail' => $mail,
                'code_naf' => $code_naf,
                'numero_qualiopi' => $numero_qualiopi,
                'tva' => $tva,
                'date_maj' => $date_creation,
                'date_creation' => $date_creation
            ];



            $req = $this->getBDD()->prepare(
                "INSERT INTO fg_formateur 
            (id_organisme_formation, nom,  prenom,  discipline, adresse, code_postal,  ville,  telephone,  mail,  code_naf,  numero_qualiopi,  tva,  date_maj,  date_creation)
            VALUES 
            (:id_organisme_formation, :nom, :prenom,  :discipline, :adresse, :code_postal,  :ville, :telephone, :mail, :code_naf, :numero_qualiopi, :tva, :date_maj, :date_creation)"
            );
            $res = $req->execute($data);
            $req->closeCursor();
            return $res;
        }
    }


    public function supprimerFormateurDB($id_formateur)
    {
        $data = ['id_formateur' => $id_formateur,];
        $req = $this->getBDD()->prepare("DELETE FROM fg_formateur WHERE id = :id_formateur;");
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }

    public function actualiserFormateurDB($id_formateur, $nom, $prenom, $discipline, $adresse, $code_postal, $ville, $telephone, $mail, $code_naf, $numero_qualiopi, $tva, $date_creation)
    {
        $date_maj = getdate()['year'] . '-' . getdate()['mon'] . '-' . getdate()['mday'];
        $data = [
            'id_formateur' => $id_formateur,
            'nom' => $nom,
            'prenom' => $prenom,
            'discipline' => $discipline,
            'adresse' => $adresse,
            'code_postal' => $code_postal,
            'ville' => $ville,
            'telephone' => $telephone,
            'mail' => $mail,
            'code_naf' => $code_naf,
            'numero_qualiopi' => $numero_qualiopi,
            'tva' => $tva,
            'date_creation' => $date_creation,
            'date_maj' => $date_maj
        ];
        $req = $this->getBDD()->prepare(
        "UPDATE fg_formateur
        SET
        date_creation = :date_creation,
        nom = :nom,
        prenom = :prenom,
        discipline = :discipline,
        adresse = :adresse,
        code_postal = :code_postal,
        ville = :ville,
        telephone = :telephone,
        mail = :mail,
        code_naf = :code_naf,
        numero_qualiopi = :numero_qualiopi,
        tva = :tva,
        date_maj = :date_maj
        WHERE id = :id_formateur;"
        );
        $res = $req->execute($data);
        $req->closeCursor();
        return $res;
    }
}
