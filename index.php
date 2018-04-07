<?php
    $title = 'promsns Home';
    $main_menu_file = 'nav.inc';
    include 'theme/template-header.inc';
?>

        <h1><?php echo $title; ?></h1>
        <h4>This website, promsns.org, is the anchor point for a number of provenance-related things, including the PROvenance Management System (PROMS) Namespace.</h4>
        <p>Some starting points:</p>
        <ul>
                <li>
                        <h4>Provenance writing</h4>
                        <ul>
                                <li><a href="/modsim2015">Proceedings of the <strong>Research Data Provenance</strong> session</a> at <a href="http://mssanz.org.au/modsim2015/">MODSIM 2015</a></li>
				<li><a href="/modsim2017">Preprints for the <strong>Provenance models and systems</strong> session</a> at <a href="http://mssanz.org.au/modsim2017/">MODSIM 2017</a></li>
                        </ul>
                </li>
                <li>
                        <h4>Documentation</h4>
                        <ul>
                                <li>The definition of "provenance" we use <a href="http://en.wikipedia.org/wiki/Provenance#Computer_science">is on wikipedia</a></li>
                                <li><a href="/wiki/proms">All about PROMS - the PROMS wiki</a></li>
                                <li><a href="/def/proms">The PROMS Ontology definition</a></li>
                                <li>The PROMS Ontology namespace: <code style="font-size: 1.5em;"><a href="/def/proms#">http://promsns.org/def/proms#</a></code> (note: this is the same as the ontology location)</li>
                        </ul>
                </li>
                <li>
                        <h4>PROMS code</h4>
                        <ul>
                                <li><a href="/repo/proms-server">PROMS Server code</a> - a redirect to the Git repository containing PROMS Server's code base</li>
                                <li><a href="/repo/proms-reporter-python">PROMS Reporter Python code</a> - the generic PROMS-O reporting toolkit in Python</li>
                                <li><a href="/repo/proms-reporter-java">PROMS Reporter Java code</a> - the generic PROMS-O reporting toolkit in </li>
                                <li><a href="/repo/proms-reporter-dotnet">PROMS Reporter .NET code</a> - the generic PROMS-O reporting toolkit in </li>
                                <li><a href="/repo/proms-pingbacks-message-generator">PROMS Pingbacks message generator</a> - a small Python toolkit that can generate <a href="http://www.w3.org/TR/prov-aq/">PROV-AQ</a> provenance pingback message and PROMS pingback message</li>
                        </ul>
                </li>
                <li>
                        <h4>Other code</h4>
                        <ul>
                                <li><a href="/repo/prov-svg">PROV SVG</a> - a tiny PROV data nodes and edges graph SVG visualiser</li>
                        </ul>
                </li>
                <li>
                        <h4>Online tools</h4>
                        <ul>
                                <li><a href="/pingbacks/validator">Pingbacks message validator</a> - a stand-alone PROV-AQ pingbacks message validator</li>
				<!--<li><a href="/eg/entity-server">Pingbacks Entity Server</a> - a dummy Linked Data 'Entity' server (as in prov:Entity) that delivers a list of dcat:Datasets with metadata allowing the testing of pingbacks.There is no dataset content and responses to pingbacks from the server are dummies - no pingback information is ingested.</li>-->
                                <!--<li><a href="/uc">Provenance Use Cases</a> - initially from the eResearch 2014 conference. These can be added to online</li>-->
                        </ul>
                </li>
                <li>
                        <h4>promsns.org namespace ontologies</h4>
                        <ul>
                                <li>see <a href="http://promsns.org/def/">def/</a></li>
                        </ul>
		</li>
        </ul>

<?php include 'theme/template-footer.inc'; ?>

