<?php
$main_menu_file = '../nav.inc';
include '../theme/template-header.inc';
?>

<h1>Inferencing Stacks</h1>
<p>Here are listed a series of tehcnology stacks capable of varying amounts of <em>reasoning</em> or <em>inferencing</em> given RDF data. We have tested these and supply notes on their abilities. Important here are the version numbers of stacsk' components.</p>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Languages</th>
            <th>Storage</th>
            <th>Manipulation</th>
            <th>Reasoner</th>
            <th>Display</th>
            <th>Requirements to use it</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Rdflib for python 2</td>
            <td>Python 2.7</td>
            <td>Memory  +SPARQL endpoint</td>
            <td><a href="https://rdflib.readthedocs.io/en/stable/">rdflib 2.*</a></td>
            <td><a href="https://github.com/RDFLib/OWL-RL">OWL-RL</a></td>
            <td>Untested,  Nicholas Car said he had this working in 2012</td>
        </tr>
        <tr>
            <td>Rdflib for python 3</td>
            <td>Python 3.6</td>
            <td>Memory  +SPARQL endpoint</td>
            <td><a href="https://rdflib.readthedocs.io/en/stable/">rdflib 4.2.2</a></td>
            <td><a href="https://github.com/RDFLib/OWL-RL">OWL-RL &gt;4 needs modification to upgrade it to use python 3</a></td>
            <td>Not yet looked at</td>
        </tr>
        <tr>
            <td><a href="https://jena.apache.org/download/">Apache Jena Fuseki 3.4.0</a></td>
            <td>Accessed through web browser or command line tools</td>
            <td>TDB or Memory</td>
            <td>Jena 3.4.0 (included)</td>
            <td>Any one of <a href="https://github.com/Galigator/openllet">Openllet 2.6.2</a>, or Jena Rules, or Owl Inferencing</td>
            <td><a href="https://jena.apache.org/documentation/fuseki2/">Fuseki 2</a></td>
            <td>openllet-distribution-2.6.2.jar is required if want to use/have relativesWithOwlInferencingAndOpenlletReasoner configuration file</td>
            <td>The following works. Query One: relativesWithOwlInferencingAndOpenlletReasoner, relatives-usingJenaRules, relativesWithOwlInferencing. Query Two: relativesWithOwlInferencingAndOpenlletReasoner, relatives-usingJenaRules. relativesWithOwlInferencing for Query Two does not give any results. This suggests that relativesWithOwlInferencingAndOpenlletReasoner and relatives-usingJenaRules is a fully functioning reasoning system but that relativesWithOwlInferencing is not.</td>
        </tr>
        <tr>
            <td>DLEJena 1.0 (emailed to us)</td>
            <td>Java</td>
            <td>Memory</td>
            <td><a href="http://jena.apache.org/download/index.cgi">Jena 2.6.4</a></td>
            <td>Pellet 2.3.6</td>
            <td>Does not work using single jar generated using IntelliJ from DLEJena1 Maven Project. Does not work using multiple jars (maven-dependency-plugin) or single jar (maven-assembly-plugin) generated from DLEJena 1.0 Maven Project using <a href="http://maven.apache.org/">Apache Maven</a></td>
            <td>Does not work</td>
        </tr>
        <tr>
            <td><a href="http://lpis.csd.auth.gr/systems/DLEJena/index.html">DLEJena 2.0</a></td>
            <td>Java</td>
            <td>Memory</td>
            <td><a href="http://jena.apache.org/download/index.cgi">Jena 2.6.2</a></td>
            <td>Pellet 2.0.1</td>
            <td>Works for the examples as well as sparql query 1 and query 2, using the following jars (for DLEJena V2): <a href="https://github.com/severin-lemaignan/pellet/blob/master/lib/owlapi/owlapi-bin.jar">owlapi-bin.jar</a>, <a href="http://lpis.csd.auth.gr/systems/DLEJena/index.html">DLEJena.jar</a>, <a href="https://sourceforge.net/projects/jena/files/Archive/Jena/Jena-2.6.2/jena-2.6.2.zip/download">Jena-2.6.2 jars</a>,<a href="https://sourceforge.net/projects/owlapi/files/OWL%20API%20%28for%20OWL%202.0%29/2.0.0/owlapi-bin-07-06-09.zip/download">owlapi-bin-07-06-09 jars</a>,  <a href="https://web.archive.org/web/20110813164347if_/http://clarkparsia.com/pellet/downloads/pellet-2.0.1.zip">pellet-2.0.1 jars</a></td>
            <td>Works for both query one and two</td>
        </tr>
        <tr>
            <td><a href="https://github.com/Galigator/openllet">Openllet 2.6.2</a></td>
            <td>Java</td>
            <td>Memory</td>
            <td><a href="http://jena.apache.org/download/index.cgi">Jena 3.4.0</a></td>
            <td>Openllet 2.6.2</td>
            <td>Does not work using Intellij generated single jar. <a href="http://maven.apache.org/">Apache Maven</a>: Working with examples and sparql query 1 and query 2: output_ApacheMavenMultipleJars (made using maven-dependency-plugin). Not working: output_ApacheMavenSingleJar (made using maven-assembly-plugin)</td>
            <td>Works for both query one and two</td>
        </tr>
        <tr>
            <td><a href="https://github.com/Galigator/openllet">Openllet 2.6.3 on github Galigator</a></td>
            <td>Java</td>
            <td>Memory</td>
            <td><a href="http://jena.apache.org/download/index.cgi">Jena</a></td>
            <td>Openllet 2.6.3</td>
            <td><a href="http://maven.apache.org/">Apache Maven</a>: The pom.xml file in the examples folder does not compile using the maven-dependency-plugin (multiple jars) and maven-assembly-plugin (single jar), you can see the output it gives in _github\ Openllet,DLEJena2\ openllet maven\ openllet-2.6.3\ examples\ runApacheMaven-output.txt. Therefore nothing works.</td>
            <td>Does not work</td>
        </tr>
        <tr>
            <td><a href="https://mvnrepository.com/artifact/com.github.galigator.openllet/openllet-examples/2.6.3">Openllet 2.6.3 on mvnrepository</a></td>
            <td>Java</td>
            <td>Memory</td>
            <td><a href="http://jena.apache.org/download/index.cgi">Jena 3.4.0</a></td>
            <td>Openllet 2.6.3</td>
            <td><a href="http://maven.apache.org/">Apache Maven</a>: Working with examples and sparql query 1 and query 2: output_ApacheMaven_openllet2.6.3_mvnrepository_MultipleJars (made using maven-dependency-plugin). Not working: output_ApacheMaven_openllet2.6.3_mvnrepository_SingleJar (made using maven-assembly-plugin). Not all the examples are working but sparql including query 1 and query 2 work: output_manualJarChoice (openllet 2.6.3), which uses the jars  <a href="http://jena.apache.org/download/index.cgi">apache-jena-3.4.0.zip</a> <a href="https://github.com/Galigator/openllet/releases">openllet-distribution-2.6.3.jar</a> <a href="https://sourceforge.net/projects/owlapi/files/OWL%20API%20%28for%20OWL%202.0%29/4.1.4/">owlapi-distribution-4.1.4.jar</a></td>
            <td>Works for both query one and two</td>
        </tr>
        <tr>
            <td><a href="https://github.com/linkeddata/rdflib.js/releases">Rdflib.js</a></td>
            <td>Javascript</td>
            <td>Memory</td>
            <td>rdflib 0.16.3</td>
            <td>HTML rendered in a browser such as FireFox</td>
            <td>Does sparql but not inferencing</td>
        </tr>
        <tr>
            <td><a href="https://code.google.com/archive/p/python-graphite/">Python Graphite</a></td>
            <td><a href="https://www.python.org/downloads/">Python 2.6</a> and Java</td>
            <td>Memory</td>
            <td>Jena 2.6.4 (integrated/ included)</td>
            <td><a href="https://github.com/Galigator/openllet">Openllet</a></td>
            <td><a href="https://sourceforge.net/projects/jpype/">JPype 0.5.4.2</a></td>
            <td>Does sparql but not inferencing</td>
        </tr>
        <tr>
            <td><a href="http://www.easyrdf.org/">EasyRDF</a></td>
            <td>PHP 7.2.1</td>
            <td>TDB or Memory</td>
            <td>Uses Apache Fuseki 3.4.0 Endpoint via HTTP</td>
            <td>Gives same results as Apache Jena Fuseki</td>
        </tr>
        <tr>
            <td><a href="http://graphite.ecs.soton.ac.uk/">PHP Graphite</a></td>
            <td>PHP 7.2.1</td>
            <td>TDB or Memory</td>
            <td>Uses Apache Fuseki 3.4.0 Endpoint via HTTP</td>
            <td>Gives same results as Apache Jena Fuseki. Does sparql CONSTRUCT queries only</td>
        </tr>
        <tr>
            <td><a href="http://graphite.ecs.soton.ac.uk/sparqllib/">Sparqllib</a></td>
            <td>PHP 7.2.1</td>
            <td>TDB or Memory</td>
            <td>Uses Apache Fuseki 3.4.0 Endpoint via HTTP</td>
            <td>Gives same results as Apache Jena Fuseki</td>
        </tr>
        <tr>
            <td><a href="http://www.dotnetrdf.org/">dotNetRDF</a></td>
            <td>Visual Studio 2017 Community Edition C#.NET Web Forms (probably also works with others)</td>
            <td>Memory (if use LeviathanQueryProcessor) or either TDB or Memory (If use an Endpoint)</td>
            <td>Option for either internal LeviathanQueryProcessor or Apache Fuseki 3.4.0 Endpoint via HTTP</td>
            <td>If use internal LeviathanQueryProcessor then it <a href="https://github.com/dotnetrdf/dotnetrdf/wiki/HowTo-Load-OWL">does not support OWL2 axioms, OWL ontologies and reasoning</a>, if using endpoint then it gives same results as Apache Jena Fuseki</td>
        </tr>
        <tr>
            <td><a href="http://ruby-rdf.github.io/sparql-client/">Ruby</a></td>
            <td>Ruby &quot;2.4.1p111 2017-03-22 revision 58053 i386-mingw32&quot; installed using <a href="https://rubyinstaller.org/downloads/">rubyinstaller-2.4.1-2-x86.exe</a></td>
            <td>TDB or Memory</td>
            <td>Uses Apache Fuseki 3.4.0 Endpoint via HTTP</td>
            <td>Gives same results as Apache Jena Fuseki</td>
        </tr>
        <tr>
            <td><a href="http://rdf4j.org/download/">RDF4J</a></td>
            <td>Java Jdk 9.0.4</td>
            <td>If uses Apache Fuseki endpoint then TDB or Memory, if use RDF4J SpinSail ForwardChainingRDFSInferencer then in memory however I am unsure whether it is possible to <a href="http://docs.rdf4j.org/javadoc/latest/?org/eclipse/rdf4j/repository/sail/SailRepository.html">store the data in a file using setDataDir</a></td>
            <td>Uses Apache Fuseki 3.4.0 Endpoint via HTTP, or loads a .ttl file and performs sparql queries on it</td>
            <td>SpinSail ForwardChainingRDFSInferencer if using it's own inferencing engine, otherwise determined by an Apache Fuseki endpoint</td>
            <td>Java output in a cmd.exe command prompt window or batch file redirected output</td>
            <td>commons-io-2.6.jar eclipse-rdf4j-2.2.4-onejar.jar guava-23.0.jar slf4j-api-1.7.25.jar slf4j-simple-1.7.25.jar httpcomponents-client-4.5.5 (all jars for httpcomponents client)</td>
            <td>If using it's own inferencing engine (SpinSail ForwardChainingRDFSInferencer) then gives four results for query one and no results for query two. Otherwise gives same results as Apache Jena Fuseki when using it's endpoint</td>
        </tr>
        <tr>
            <td><a href="https://www.stardog.com/">Stardog</a></td>
            <td>Java jre1.8.0_161 64bit (but any V8 Java 64bit or 32bit should do)</td>
            <td>Turtle TTL file is converted into a database on the hard disk in the Stardog system prior to use. Unsure how much memory might be used during reasoning</td>
            <td>Stardog's own system</td>
            <td>Stardog reasoning type options are RDFS, SL, QL, RL, EL, DL, NONE</td>
            <td>Queries are done from the command prompt cmd.exe or it is possible to write a batch file to do multiple commands, or can query using a web interface</td>
            <td>Query1:11 results (DL, QL, RL, SL) with order different for DL, 4 results (EL, NONE, RDFS). Query2:7 results (DL) with two duplicates (James2,Cathy) otherwise same as EL, 5 results (EL, RL, SL) with order different for EL, 0 results (NONE, QL, RDFS)</td>
        </tr>
        <tr>
            <td><a href="protege.stanford.edu">Protege</a></td>
            <td>Protege uses Java and it runs it's own Java application to do everything, no programming is required. Protege 5.2.0 comes with Java jre version 1.8.0_40 - Java SE Runtime environment build 1.8.0_40-b26</td>
            <td>Memory, application has ability to load a .ttl or .owl file</td>
            <td>Protege has it's own system with the ability to use plugins for various reasoners</td>
            <td>Options for reasoning are through plugins for ELK 0.4.3, FaCT++ 1.6.5, HermiT 1.3.8.413, Pellet, Pellet (Incremental), None</td>
            <td>Protege's own Java application</td>
            <td>Closing &quot;SPARQL query&quot; tab prior to choosing and starting another reasoner. Query1 for reasoners FaCT++ 1.6.5, HermiT 1.3.8.413, Pellet, Pellet (Incremental): 11 results for Snap SPARQL Query plugin, 4 results for SPARQL query window plugin. Query1 for reasoner None: 4 results for Snap SPARQL Query plugin, 4 results for SPARQL query window plugin. Query1 for reasoner ELK 0.4.3: error for Snap SPARQL Query plugin, 4 results for SPARQL query window plugin. Query2 for reasoners FaCT++ 1.6.5, HermiT 1.3.8.413, Pellet, Pellet (Incremental): 7 results for Snap SPARQL Query plugin, 0 results for SPARQL query window plugin. Query2 for reasoner None: 0 results for Snap SPARQL Query plugin, 0 results for SPARQL query window plugin. Query2 for reasoner ELK 0.4.3: error for Snap SPARQL Query plugin, 0 results for SPARQL query window plugin. In summary what works 100% are reasoners FaCT++ 1.6.5, HermiT 1.3.8.413, Pellet, Pellet (Incremental) with Snap SPARQL Query plugin for Query1 and Query2.</td>
        </tr>
        <tr>
            <td><a href="http://wifo5-03.informatik.uni-mannheim.de/bizer/ng4j/">NG4J</a> and on <a href="https://sourceforge.net/projects/ng4j/">Sourceforge</a></td>
            <td>Jena 2.6.2 (included)</td>
            <td>Working examples not yet created. Not working with inferencing</td>
        </tr>
    </tbody>
</table>

<?php include '../theme/template-footer.inc'; ?>
