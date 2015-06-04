var keystone = require('keystone'),
		note  = keystone.list('Note');

exports = module.exports = function(req, res) {
	
	var view = new keystone.View(req, res),
		locals = res.locals;
	
	// locals.section is used to set the currently selected
	// item in the header navigation.
	locals.section = 'create';
	
	// Create new message on POST
	if (req.method == 'POST') {
		var body = req.body;
		var newNote = new note.model({
			author: body.name,
			contact: body.email,
			content: body.message,
			publishedDate: Date.now(),
			state: 'published'
		});
		newNote.save(function(err) {
			if (!err) res.redirect('/note/' + newNote._id);
		});
	} else {
		// Render the view
		view.render('create');
	}

};
