var keystone = require('keystone'),
		message  = keystone.list('Note');

exports = module.exports = function(req, res) {
	
	var view = new keystone.View(req, res),
		locals = res.locals;
	
	// locals.section is used to set the currently selected
	// item in the header navigation.
	locals.section = 'message';
	locals.filters = {
		message: req.params.id
	};
	locals.data = {
		messages: []
	};
	
	// Load the current post
	view.on('init', function(next) {
		
		var q = keystone.list('Note').model.findOne({
			state: 'published',
			slug: locals.filters.message
		});
		
		q.exec(function(err, result) {
			locals.data.message = result;
			next(err);
		});
		
	});
	
	// Load other posts
	view.on('init', function(next) {
		
		var q = keystone.list('Note').model.find().where('state', 'published').sort('-publishedDate').limit('4');
		
		q.exec(function(err, results) {
			locals.data.messages = results;
			next(err);
		});
		
	});
	
	
	// Render the view
	view.render('message');

};
