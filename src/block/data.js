/**
 * Returns a Promise with the latest answers or an error on failure.
 *
 * @param 			{Number} 		postsToShow 		Number of posts to display.
 *
 * @returns 		{wp.api.collections.Posts}  		Returns a Promise with the latest posts.
 */
export function getAnswers( answersToShow = 5 ) {

	const answerCollection = new wp.api.collections.Answers();

	const answers = answerCollection.fetch({
		data: {
			per_page: answersToShow,
		},
	});

	return answers;

}
