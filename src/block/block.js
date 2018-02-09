/**
 * BLOCK: answers
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './style.scss';
import './editor.scss';
import Answers from './get-answers';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks

/**
 * Register: a Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @see 		https://wordpress.org/gutenberg/handbook/block-api/
 * @param 		string 		name 			Block name.
 * @param 		obj 		settings 		Block settings.
 * @return 		WPBlock 					The block, if it has been successfully
 * 												registered; otherwise `undefined`.
 */
registerBlockType( 'answers/block-answers', {
	title: __( 'Answers' ),
	icon: 'editor-help',
	category: 'widgets',
	keywords: [
		__( 'Answers' ),
        __( 'Frequently Asked Questions' ),
		__( 'FAQs' )
	],
	edit: props => {
		return (
			<Answers
				className={props.className}
			/>
		);
	},
	save: props => {
		// rendered in PHP callback.
		return null
	},
} );
