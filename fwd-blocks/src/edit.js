import { InspectorControls, InnerBlocks } from "@wordpress/block-editor";
import { PanelBody, SelectControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";

const AOS_OPTIONS = [
	{ value: "fade-up", label: __("Fade Up", "fwd-blocks") },
	{ value: "fade-down", label: __("Fade Down", "fwd-blocks") },
	{ value: "fade-left", label: __("Fade Left", "fwd-blocks") },
	{ value: "fade-right", label: __("Fade Right", "fwd-blocks") },
];

const Edit = ({ attributes, setAttributes }) => {
	const { dataAos = "fade-up" } = attributes; // Default to "fade-up"

	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Animation Settings", "fwd-blocks")}>
					<SelectControl
						label={__("Animation Type", "fwd-blocks")}
						value={dataAos}
						options={AOS_OPTIONS}
						onChange={(newDataAos) => setAttributes({ dataAos: newDataAos })}
					/>
				</PanelBody>
			</InspectorControls>
			<div data-aos={dataAos}>
				<InnerBlocks />
			</div>
		</>
	);
};

export default Edit;
