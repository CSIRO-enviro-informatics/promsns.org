<?php
    $title = 'promsns def/';
    $root_path = '../';
    include $root_path . 'theme/header.inc';
?>

<h1>PROMS <code>def</code> Register</h1>
<p>This page lists a series of definitional <a href="https://www.w3.org/standards/semanticweb/">Semantic Web</a> resources - mostly <a href="https://www.w3.org/TR/owl2-overview/">Web Ontology Language (OWL)</a> ontologies. Some are defined within this <code>promsns.org</code> namespace, others elsewhere but have been worked on by promsns.org contributors.</p>
<h2>PROMS ontologies</h2>
<ul>
  <li>
    <a href="http://promsns.org/def/agr">Agreements ontology</a>
    <ul><li>Models 'agreements' which are social contracts that include licenses, laws, contracts</li></ul>
  </li>
  <li>
    <a href="http://promsns.org/def/proms">PROMS ontology</a>
    <ul><li>A small specialisation of the <a href="https://www.w3.org/TR/prov-o/">PROV ontology</a> used to structure, bundle validate and ultimately manage reports of provenance generated by workflow-like systems.</li></ul>
  </li>
  <li>
    <a href="http://promsns.org/def/do">Decision ontology</a>
    <ul><li>Provides basic means for describing decision and decisionmaking.</li></ul>
  </li>
  <li>
    <a href="http://promsns.org/def/dmn">Decision Modelling Notation ontology</a>
    <ul><li>An OWL ontology version of the <a href="http://www.omg.org/spec/DMN/1.1">Decision Modelling and Notation (DMN) specification (v1.1)</a>.</li></ul>
  </li>
  <li>
    <a href="http://promsns.org/def/decprov">Decision Provenance (DecPROV) ontology</a>
    <ul><li>A re-worked version of the <a href="http://promsns.org/def/do">Decision ontology</a> that aligns it with the <a href="https://www.w3.org/TR/prov-o/">PROV ontology</a>.</li></ul>
  </li>
  <li>
    <a href="http://promsns.org/def/dsprov">DigiScape Provenance ontology</a>
    <ul><li>A small specialisation of the <a href="https://www.w3.org/TR/prov-o/">PROV ontology</a> to specialise elements for the <a href="https://research.csiro.au/digiscape/">DigiCape</a> project.</li></ul>
  </li>
  <li>
    <a href="http://promsns.org/def/rel">Relatives ontology</a>
    <ul><li>A standard take on relations between people (parte/child/grandparent) for teaching OWL modelling.</li></ul>
  </li>
  <li>
    <a href="http://purl.org/storagesys">Storage Systems ontology</a>
    <ul><li>This ontology is designed to describe digital artefact storage systems in a vendor-neutral way so that choices about their systems' appropriateness for particular tasks can be gauged.</a>.</li></ul>
  </li>
</ul>

<h2>Other, related, ontologies</h2>
<ul>
  <li>
    <a href="http://promsns.org/def/fsdf">FSDF ontology</a>
    <ul><li>An in-development ontology for defining relationships between <a href="http://www.anzlic.gov.au/foundation-spatial-data-framework">Foundational Spatial Data Framework</a> Linked Data datasets. This ontology is only temporarily hosted using a <code>promsns.org</code> namespace while in development.</li></ul>
  </li>
  <li>
    <a href="http://gnafld.net/def/gnaf">GNAF ontology</a>
    <ul><li>An ontology for the content of the <a href="http://psma.com.au">PSMA</a> <a href="https://www.psma.com.au/products/g-naf">Geocoded National Address File (G-NAF)</a>.</li></ul>
  </li>
  <li>
    <a href="http://pid.geoscience.gov.au/def/ont/ga/igsn">IGSN ontology</a>
    <ul><li>An OWL ontology that defines a data model as close to the <a href="http://www.igsn.org">IGSN</a>'s <a href="http://igsn.github.io/metadata/">XML metadata model</a> as possible.</li></ul>
  </li>
  <li>
    <a href="http://pid.geoscience.gov.au/def/ont/ga/link">LINK ontology</a>
    <ul><li>An ontology defining the data model of the FSDF's <a href="http://link.fsdf.org.au">Location Information Knowledge Platform</a>. This ontology acts as a platform-independent data model and may also soon act as a validation model for LINK datasets' metadata.</li></ul>
  </li>
  <li>
    <a href="http://pid.geoscience.gov.au/def/ont/ga/pdm">GA's Public Data Model ontology</a>
    <ul><li>An OWL ontology that explains relation between <a href="http://www.ga.gov.au">Geoscience Australia</a>'s published Linked Data objects.</li></ul>
  </li>
</ul>

<?php include $root_path . 'theme/footer.inc'; ?>
