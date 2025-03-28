import { registerBlockType } from "@wordpress/blocks";
import Edit from "./edit";
import Save from "./save";
import metadata from "./block.json";

// Register the block
registerBlockType(metadata.name, {
	...metadata,
	edit: Edit,
	save: Save,
});
