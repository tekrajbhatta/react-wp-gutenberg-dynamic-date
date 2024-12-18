import { registerBlockType } from '@wordpress/blocks';
import metadata from './block.json';
import edit from './edit';
import './style.css';

registerBlockType(metadata, {
    edit,
    // Render with PHP only
    save: () => null,
});
