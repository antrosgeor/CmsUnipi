// JavaScript Document

//pages
function validate_form_pages()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var title = document.getElementById('title').value;
	var slug = document.getElementById('slug').value;
	var label = document.getElementById('label').value;
	var header = document.getElementById('header').value;
	var type = document.getElementById('type').value;
	var body = document.getElementById('body').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n";

	if (blank(title)) {
		msg = msg + "- Title:\n";
	}

	if (blank(slug)) {
		msg = msg + "- Slug:\n";
	}

	if (blank(label)) {
		msg = msg + "- Label:\n";
	}

	if (blank(header)) {
		msg = msg + "- Header:\n";
	}
	
	if (blank(type)) {
		msg = msg + "- Type:\n";
	}

/*
	if (blank(body)) {
		msg = msg + "- Body:\n";
	}
*/
	if (msg!="Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n") {
		alert ( msg );
		return false;
	}

	return true;
}


// Η συνάρτηση αυτή επιστρέφει 1 αν η τιμή του x είναι κενή, 0 σε διαφορετική περίπτωση
function blank ( x )
{
	 var length = x.length; // Αποθηκεύουμε τον αριθμό των χαρακτήρων
	 var result = 1;

	for (i = 1;i <= length;i++)
	{
		if (x.charAt(i-1) != " ") { // Διατρέχουμε έναν έναν χαρακτήρα και αν υπάρχει έστω ένας που ΔΕΝ είναι ο κενός, επιστρέφουμε 0
			
			result = 0;
			break;
		}
	} 
	return result;
}



//login
function validate_form_login()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n";

	if (blank(email)) {
		msg = msg + "- Email\n";
	}
	else if (!email.match(/(\w+)@(.+)\.(\w+)$/)) { // Ελέγχουμε με κατάλληλο regular expression αν η τιμή του mail έχει έγκυρη μορφή. Για περισσότερες λεπτομέρειες, μπορεί να ανατρέξει κανείς στο google με αναζήτηση 'regular expressions javascript' 
		msg = msg + "- Το E-mail δεν είναι έγκυρο\n";
	}


	if (blank(password)) {
		msg = msg + "- Password\n";
	}

	if (msg!="Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n") {
		alert ( msg );
		return false;
	}

	return true;
}

//news
function validate_form_news()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var title = document.getElementById('title').value;
	var body = document.getElementById('body').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n";

	if (blank(title)) {
		msg = msg + "- Title:\n";
	}
/*
	if (blank(body)) {
		msg = msg + "- Body:\n";
	}
*/
	if (msg!="Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n") {
		alert ( msg );
		return false;
	}

	return true;
}


//users
function validate_form_users()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var first = document.getElementById('first').value;
	var last = document.getElementById('last').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var passwordv = document.getElementById('passwordv').value;
	
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n";

	if (blank(first)) {
		msg = msg + "- First Name:\n";
	}

	if (blank(last)) {
		msg = msg + "- Last Name:\n";
	}
	
	if (blank(email)) {
		msg = msg + "- Email Adress:\n";
	}
	else if (!email.match(/(\w+)@(.+)\.(\w+)$/)) { // Ελέγχουμε με κατάλληλο regular expression αν η τιμή του mail έχει έγκυρη μορφή. Για περισσότερες λεπτομέρειες, μπορεί να ανατρέξει κανείς στο google με αναζήτηση 'regular expressions javascript' 
		msg = msg + "- Το E-mail δεν είναι έγκυρο\n";
	}

	if (blank(password)) {
		msg = msg + "- Password:\n";
	}

	if (blank(passwordv)) {
		msg = msg + "- Verify Password:\n";
	}


	if (msg!="Δεν έχετε συμπληρώσει τα παρακάτω πεδία\n") {
		alert ( msg );
		return false;
	}

	return true;
}
