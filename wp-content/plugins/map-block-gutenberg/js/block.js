/**
 * Google Maps Block for Gutenberg Editor
 *
 * (c) WebFactory Ltd
 */
 
 
( function(blocks, i18n, element) {
  var el = element.createElement;
  var __ = i18n.__;
  var Editable = blocks.Editable;
  var children = blocks.source.children;
  var AlignmentToolbar = wp.blocks.AlignmentToolbar;
  var BlockControls = wp.blocks.BlockControls;
  var InspectorControls = wp.blocks.InspectorControls;
  var TextControl = wp.blocks.InspectorControls.TextControl;
  var RangeControl = wp.blocks.InspectorControls.RangeControl;
  
  
  function buildMapIframe(props) {
    attr = {};
    
    if (!props.attributes.apiKey) {
      props.attributes.apiKey = 'AIzaSyAjyDspiPfzEfjRSS5fQzm-3jHFjHxeXB4';
    }
    
    attr.width = '100%';
    attr.height = parseInt(props.attributes.height, 10) + 'px';
    attr.frameBorder = '0';
    attr.src = 'https://www.google.com/maps/embed/v1/place?q=' + encodeURIComponent(props.attributes.address) + '&maptype=roadmap&zoom=' + parseInt(props.attributes.zoom, 10) + '&key=' + props.attributes.apiKey;
    
    iframe = el('iframe', attr, '');
    
    return iframe;
  } // buildMapIframe
  

  blocks.registerBlockType('webfactory/map', {
    title: __('Map'),
    description: __('Simple yet powerfull map block powered by Google Maps.'),
    icon: 'location-alt',
    category: 'common',
    keywords: [
            __('Google Maps'),
            __('Directions'),
            __('Maps')],
    attributes: {
      address: {
        type: 'string',
        default: 'Theater District, New York, USA'
      },
      zoom: {
        type: 'number',
        default: 15
      },
      height: {
        type: 'number',
        default: 300
      },
      apiKey: {
        type: 'string',
        default: ''
      }
    },

    edit: function(props) {
      return [
        !! props.focus && el(
        blocks.InspectorControls,
          {key: 'inspector'},
          el(
            TextControl,
            {
              type: 'text',
              label: __('Address'),
              value: props.attributes.address,
              onChange: function(value) {
                props.setAttributes({address: value});
              },
            }
          ),
          el(
            RangeControl,
            {
              label: __('Zoom'),
              min: 0,
              max: 21,
              value: props.attributes.zoom,
              onChange: function(value) {
                props.setAttributes({zoom: value});
              },
            }
          ),
          el(
            RangeControl,
            {
              label: __('Height (px)'),
              min: 50,
              max: 1000,
              value: props.attributes.height,
              onChange: function(value) {
                props.setAttributes({height: value});
              },
            }
          ),
          el(
            TextControl,
            {
              type: 'text',
              label: __('API Key'),
              value: props.attributes.apiKey,
              onChange: function(value) {
                props.setAttributes({apiKey: value});
              },
            }
          ),
          el( 'p', {className: 'wf-control-label' }, 'Please create your API key on the ', el('a', {target: '_blank', href: 'https://console.developers.google.com'}, 'Google Console' ), '. This is a requirement enforced by Google.'),
        ),
        el('div', {className: props.className, onClick: function(e) { jQuery('.editor-sidebar .components-panel__header button:eq(1)').trigger('click') }}, buildMapIframe(props))
      ];
    },

    save: function(props) {
      return buildMapIframe(props);
    },
  } ); // registerBlock
} )(window.wp.blocks, window.wp.i18n, window.wp.element);
