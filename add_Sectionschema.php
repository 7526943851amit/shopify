<div class="container">
  <div class="row">
    <div class="col-sm-4">
{{ section.settings.sectionImage | img_url: '100x' | img_tag }}
      <h3>{{ section.settings.heading }}</h3>
     <p>{{ section.settings.description }}</p>
    </div>
    <div class="col-sm-4">
    {{ section.settings.sectionImage2 | img_url: '100x' | img_tag }}
 <h3>{{ section.settings.heading2 }}</h3>
     <p>{{ section.settings.description2 }}</p>
    </div>
    <div class="col-sm-4">
   {{ section.settings.sectionImage3 | img_url: '100x' | img_tag }}
 <h3>{{ section.settings.heading3 }}</h3>
     <p>{{ section.settings.description3 }}</p>
    </div>
  </div>
</div>

{% schema %}
{
  "name": "Mysection",
  "settings": [
     {
      "type": "image_picker",
      "id": "sectionImage",
      "label": "Select Image"
    },
    {
      "type": "text",
      "id": "heading",
      "label": "Enter Title"
    },
    {
      "type": "textarea",
      "id": "description",
      "label": "Enter Description"
    }, {
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
  "presets": [
    {
      "name": "Diet Plan",
      "category": "Custom"
    }
  ]
}
{% endschema %}



