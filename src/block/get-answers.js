import { getAnswers } from './data.js';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks

export default class Answers extends Component {
    constructor( props ) {
        super( ...arguments );
        this.state = {
            answers: [ { question: { rendered: __( 'Finding answers...' ) } } ],
        };

        getAnswers()
            .then( answers => {
                return this.setState( { answers } );
            } );
    }

    render() {
        return(
            <ul className={ this.props.className }>
                { this.state.posts.map( answers => {
                    return <li>{ answers.question.rendered }</li>
                })}
            </ul>
        );
    }
}
