var keystone = require('keystone');

exports = module.exports = function(req, res) {
	
	var view = new keystone.View(req, res),
		locals = res.locals;
	
	// locals.section is used to set the currently selected
	// item in the header navigation.
	locals.section = 'home';

	locals.data = {
		notes: []
	};

	// Load the posts
	view.on('init', function(next) {
		
		var q = keystone.list('Note').paginate().where('state', 'published').sort('-publishedDate');
		
		q.exec(function(err, results) {
			locals.data.notes = results;
			console.log(results);
			next(err);
		});
		
	});
	
	// Render the view
	view.render('index');
	
};
