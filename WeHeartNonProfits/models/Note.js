var keystone = require('keystone'),
	Types = keystone.Field.Types;

/**
 * Message Model
 * ==========
 */

var Note = new keystone.List('Note', {
	map: { name: 'author' },
	autokey: { path: 'slug', from: '_id', unique: true },
	track: true
});

Note.add({
	state: { type: Types.Select, options: 'draft, published, archived', default: 'published', index: true },
	author: { type: String, index: true, initial: true },
	contact: { type: String, index: true, initial: true },
	publishedDate: { type: Types.Date, index: true, dependsOn: { state: 'published' } },
	content: { type: String, initial: true }
});

Note.defaultColumns = 'author|20%, publishedDate|20%, content|60%';

Note.register();
