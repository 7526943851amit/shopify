<div class="container">
  <div class="row">
    <div class="col-sm-4">
 {% for block in section.blocks %}  
        <div class="col-sm-4">
         
    {{ block.settings.galleryImage1 | img_url: '100x' | img_tag }}
   <h3>{{ block.settings.galleryLabel }}</h3>
        <p>{{ block.settings.galleryDescription }}</p>

        </div>
      {% endfor %}
    </div>
    
  </div>
 
 
    

{% schema %}
{
  "name": "Mysection",
  "settings": [
    {
      "type": "image_picker",
      "id": "sectionImage5",
      "label": "Select Image"
    },
    {
      "type": "text",
      "id": "heading5",
      "label": "Enter Title"
    },
    {
      "type": "textarea",
      "id": "description5",
      "label": "Enter Description"
    },
    {
      "type": "image_picker",
      "id": "sectionImage2",
      "label": "Select Image"
    },
    {
      "type": "text",
      "id": "heading2",
      "label": "Enter Title"
    },
    {
      "type": "textarea",
      "id": "description2",
      "label": "Enter Description"
    },
    {
      "type": "image_picker",
      "id": "sectionImage3",
      "label": "Select Image"
    },
    {
      "type": "text",
      "id": "heading3",
      "label": "Enter Title"
    },
    {
      "type": "textarea",
      "id": "description3",
      "label": "Enter Description"
    }
  ],
  "blocks": [
    {
      "type": "gallery",
      "name": "Gallery",
      "settings": [
        {
          "type": "text",
          "id": "galleryLabel",
          "label": "Gallery Label"
        },
        {
          "type": "textarea",
          "id": "galleryDescription",
          "label": "Gallery Description"
        },
        {
          "type": "image_picker",
          "id": "galleryImage1",
          "label": "Gallery Image 1"
        }   
      ]
    }
  ],
  "presets": [
    {
      "name": "Diet Plan",
      "category": "Custom"
    }
  ]
}

{% endschema %}



