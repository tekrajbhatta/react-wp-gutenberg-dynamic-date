import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';

function Edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps({
        className: 'current-date'
    });

    // Get current date for editor
    const currentDate = new Date().toLocaleDateString('en-US', { 
        month: 'long', 
        day: 'numeric', 
        year: 'numeric' 
    });

    return (
        <p {...blockProps}>
            <RichText
                tagName="span"
                multiline={false}
                placeholder={__('Enter text before date (optional)', 'vdplug')}
                value={attributes.content}
                onChange={(newContent) => setAttributes({ content1: newContent })}
            />
            <span className="date-display">{ currentDate }</span>
            <RichText
                tagName="span"
                multiline={false}
                placeholder={__('Enter text after date (optional)', 'vdplug')}
                value={attributes.content}
                onChange={(newContent) => setAttributes({ content2: newContent })}
            />
        </p>
    );
}

export default Edit;
