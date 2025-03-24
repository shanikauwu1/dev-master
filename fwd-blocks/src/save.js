import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

const Save = ({ attributes }) => {
	const { dataAos } = attributes;

	return (
		<div {...useBlockProps.save()} data-aos={dataAos}>
			<InnerBlocks.Content />
		</div>
	);
};

export default Save;
