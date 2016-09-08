class taxes {
    constructor(salaire, sexe, nbenfants, charges, assurances, cotisations, fraistotaux, salairenet) {
        this.salaire = salaire;
        this.sexe = sexe;
        this.nbEnfants = nbenfants;
        this.charges = charges;
        this.assurances = assurances;
        this.fraisTotaux = fraistotaux;
        this.salaireNet = salairenet;
    }
    calculsalairenet() {
        this.salaireNet = this.salaire - this.fraisTotaux; 
    }
    calculfraistotaux() {
        this.charges = ((this.salaire*18)/100);
        this.assurances = ((this.salaire*7)/100);
        this.cotisations = ((this.salaire*5)/100);
        this.fraisTotaux = this.charges + this.assurances + this.cotisations;
        if (this.sexe == 'F') {
            var reduc = this.fraisTotaux * 2/100;   
        }
        else {
            var reduc = 0;
        }
        if (this.nbEnfants == '3'){
            var reduc1 = this.fraisTotaux * 1/100;
        }
        else if (this.nbEnfants > '3'){
            var reduc1 = this.fraisTotaux * 2/100;
        }
        else {
            var reduc1 = 0;
        }
        this.fraisTotaux = this.fraisTotaux - reduc - reduc1;
    }
}