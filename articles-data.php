<?
function list_authors($authors){
  $list = array();
  foreach($authors as $a){
    $list[] = (isset($a['id'])) ? '<a href="'.$a['id'].'">'.$a['name'].'</a>' : $a['name'];
  }
  if(count($authors) > 1) {
    $list[count($authors)-1] = "&amp; ".$list[count($authors)-1];
  }
  $list = implode(", ", $list);
  return $list;
}
// TODO: One day this will be generated from an inbox, or something..
// TODO: add tags so that one day these might be sorted
// ,array(
//      "id" => ""
//     ,"name" => ""
//     ,"published" => new DateTime("")
//     ,"author" => array(array(
//          "id" => ""
//         ,"name" => ""
//       ))
//     ,"summary" => ""
//     ,"slug" => ""
//     ,"root" => ""
//   )
$articles = array(
  array(
    "id" => "http://discoversociety.org/2017/01/03/social-science-social-futures-fast-scholarship-emerging-technologies-the-future-of-inquiry/"
    ,"name" => "Social Science & Social Futures: Fast Scholarship, Emerging Technologies & the Future of Inquiry"
    ,"published" => new DateTime("2017-01-03")
    ,"author" => array(
        array("id" => "https://markcarrigan.net/", "name" => "Mark Carrigan"),
        array("name" => "Will Housley")
      )
    ,"summary" => "<p>Distributed networked technologies have transformed communication, produced new forms of ‘data’ and have had a significant effect on the way in which knowledge is produced. From crowdsourcing data annotation and the feature identification of massive data sets as an aspect of ‘citizen science’ to the use of Twitter to exchange ideas and links to recently published papers with other scholars and scientists around the world; initial analyses and thought pieces can also be shared and promoted quickly with networked scholarly communities (and beyond) at little cost. These and related developments generate a number of issues including how, in this case, social scientists communicate with wider publics through digital means and how the social science community reacts and responds to the opportunities, risks, and challenges presented by the digital revolution.</p>"
    ,"slug" => "social-science-social-futures-fast-scholarship-emerging-technologies-the-future-of-inquiry"
    ,"root" => "discoversociety.org"
  ),
  array(
     "id" => "http://www.natureindex.com/news-blog/i-made-my-grant-application-public-heres-why-you-should-too-"
    ,"name" => "I made my grant application public, here's why you should too"
    ,"published" => new DateTime("2016-01-04")
    ,"author" => array(
        array(
          "name" => "Adrian Barnett"
        )
      )
    ,"summary" => "<p><q>If funding applications were open access, science would benefit from more universal scrutiny. I have unsuccessfully applied for this kind of grant funding nine times before. On this occasion, I took the unusual step of making my successful application publicly available for others to read.</q></p>"
    ,"slug" => "i-made-my-grant-application-public-heres-why-you-should-too"
    ,"root" => "natureindex.com"
  ),
  array(
     "id" => "http://csarven.ca/linked-data-notifications"
    ,"name" => "Linked Data Notifications: a resource-centric communication protocol"
    ,"published" => new DateTime("2016-12-15")
    ,"author" => array(
        array(
           "id" => "http://csarven.ca/#i"
          ,"name" => "Sarven Capadisli"
        ),
        array(
           "id" => "https://rhiaro.co.uk/#me"
          ,"name" => "Amy Guy"
        ),
        array(
           "id" => "https://langec.wordpress.com/about/"
          ,"name" => "Christoph Lange"
        ),
        array(
           "id" => "http://eis.iai.uni-bonn.de/SoerenAuer.html"
          ,"name" => "Sören Auer"
        ),
        array(
           "id" => "https://www.w3.org/People/Berners-Lee/#i"
          ,"name" => "Tim Berners-Lee"
        )
      )
    ,"summary" => "<p>In this article we describe the Linked Data Notifications (LDN) protocol, which is a W3C Candidate Recommendation. Notifications are sent over the Web for a variety of purposes, for example, by social applications. The information contained within a notification is structured arbitrarily, and typically only usable by the application which generated it in the first place. In the spirit of Linked Data, we propose that notifications should be reusable by multiple authorised applications. Through separating the concepts of senders, receivers and consumers of notifications, and leveraging Linked Data principles of shared vocabularies and URIs, LDN provides a building block for decentralised Web applications. This permits end users more freedom to switch between the online tools they use, as well as generating greater value when notifications from different sources can be used in combination. We situate LDN alongside related initiatives, and discuss additional considerations such as security and abuse prevention measures. We evaluate the protocol’s effectiveness by analysing multiple, independent implementations, which pass a suite of formal tests and can be demonstrated interoperating with each other.</p>"
    ,"slug" => "linked-data-notifications"
    ,"root" => "csarven.ca"
  ),
  array(
     "id" => "https://rhiaro.co.uk/2016/11/the-virtue-of-paywalls"
    ,"name" => "The Virtue of Paywalls"
    ,"published" => new DateTime("2016-11-04")
    ,"author" => array(array(
         "id" => "https://rhiaro.co.uk/#me"
        ,"name" => "Amy Guy"
      ))
    ,"summary" => "<p>Gatekeepers are required in academic publishing to enforce quality, coherance and to lend authority. When anyone can publish anything, as is the case on the Web today, lies and misinformation spread much faster than the truth. People publish opinions as facts, distorted interpretations of data, make general statements based on samples and take things out of context.</p>"
    ,"slug" => "the-virtue-of-paywalls"
    ,"root" => "rhiaro.co.uk"
  )
  ,array(
     "id" => "https://www.whitehouse.gov/blog/2016/10/28/federally-funded-research-results-are-becoming-more-open-and-accessible"
    ,"name" => "Federally Funded Research Results Are Becoming More Open and Accessible"
    ,"published" => new DateTime("2016-10-28")
    ,"author" => array(array(
         "id" => "https://www.whitehouse.gov/"
        ,"name" => "Jerry Sheehan"
      ))
    ,"summary" => "<p> Significant strides in improving public access to scholarly publications and digital data help usher in an era of open science</p>"
    ,"slug" => "federally-funded-research-open-and-accessible"
    ,"root" => "whitehouse.gov"
  )
  ,array(
     "id" => "https://rhiaro.co.uk/2016/10/580f529169a52"
    ,"name" => "On the 'small effort' of self-archiving"
    ,"published" => new DateTime("2016-10-25")
    ,"author" => array(array(
         "id" => "https://rhiaro.co.uk/#me"
        ,"name" => "Amy Guy"
      ))
    ,"summary" => "<p>If you are Web savvy, it is a 'small effort' to self-archive your work in a space you control. But not everyone can manage that.</p>"
    ,"slug" => "self-archiving"
    ,"root" => "rhiaro.co.uk"
  )
  ,array(
     "id" => "https://www.eff.org/deeplinks/2016/08/stupid-patent-month-elsevier-patents-online-peer-review"
    ,"name" => "Stupid Patent of the Month: Elsevier Patents Online Peer Review"
    ,"published" => new DateTime("2016-08-31")
    ,"author" => array(array(
         "id" => "https://www.eff.org/about/staff/elliot-harmon"
        ,"name" => "Elliot Harmon"
      ),
      array(
           "id" => "https://www.eff.org/about/staff/daniel-nazer"
          ,"name" => "Daniel Nazer"
        )
      )
    ,"summary" => "<p>On August 30, 2016, the Patent Office issued U.S. Patent No. 9,430,468, titled; “Online peer review and method.” The owner of this patent is none other than Elsevier, the giant academic publisher. When it first applied for the patent, Elsevier sought very broad claims that could have covered a wide range of online peer review. </p>"
    ,"slug" => "stupid-patent-month-elsevier-patents-online-peer-review"
    ,"root" => "eff.org"
  )
  ,array(
     "id" => "https://elifesciences.org/content/5/e16800"
    ,"name" => "Point of view: How open science helps researchers succeed"
    ,"published" => new DateTime("2017-07-07")
    ,"author" => array(array(
         "id" => "http://orcid.org/0000-0002-9430-5221"
        ,"name" => "Erin C McKiernan"
      ))
    ,"summary" => "<p>We review literature demonstrating that open research is associated with increases in citations, media attention, potential collaborators, job opportunities and funding opportunities. These findings are evidence that open research practices bring significant benefits to researchers relative to more traditional closed practices.</p>"
    ,"slug" => "open-science-helps-researchers-succeed"
    ,"root" => "elifesciences.org"
  )
  ,array(
     "id" => "http://rufuspollock.org/2016/05/16/open-scholarly-publishing/"
    ,"name" => "Open Scholarly Publishing"
    ,"published" => new DateTime("2016-05-15")
    ,"author" => array(array(
         "id" => "http://rufuspollock.org"
        ,"name" => "Rufus Pollock"
      ))
    ,"summary" => "<p>Our current system for scholarly publishing is highly inefficient and poorly suited to the Internet age. An open model would cure many of the current ills as well as offering greater flexibility and greater potential for innovation. However, exactly how an open model would work, and how it would be funded has not always been clear.</p>"
    ,"slug" => "open-scholarly-publishing"
    ,"root" => "rufuspollock.org"
  )
  ,array(
     "id" => "https://blogs.ch.cam.ac.uk/pmr/2016/04/30/a-commentary-on-sci-hub-1-scholarly-publishing-is-broken/"
    ,"name" => "A commentary on Sci-hub: 1. Scholarly publishing is broken"
    ,"published" => new DateTime("2016-04-30")
    ,"author" => array(array(
         "id" => "https://blogs.ch.cam.ac.uk/pmr"
        ,"name" => "Peter Murray-Rust"
      ))
    ,"summary" => "<p>Many of you will already have read of Science Magazine’s account of Sci-Hub, the “pirate” site for scholarly publications. “Science” is often seen as one to the 'top three' outlets, along with Nature and Cell.</p>"
    ,"slug" => "a-commentary-on-schi-hub-1"
    ,"root" => "blogs.ch.cam.ac.uk"
  )
  ,array(
     "id" => "https://hypothes.is/blog/a-coalition-of-scholarly-annotators/"
    ,"name" => "A coalition for scholarly annotation"
    ,"published" => new DateTime("2016-04-27")
    ,"author" => array(array(
         "id" => "https://hypothes.is/blog/author/judell/"
        ,"name" => "Jon Udell"
      ))
    ,"summary" => "<p>On April 17th, the Annotating all Knowledge coalition gathered in Portland to begin the work of defining, designing, and implementing a common framework for scholarly collaboration. Members of the coalition include publishers, platform providers, librarians, standards makers, and technologists who share a common interest in annotation of all scholarly content for the benefit of scientists, humanists, students, teachers, and citizens.</p>"
    ,"slug" => "a-coalition-of-scholarly-annotators"
    ,"root" => "hypothes.is"
  )
  ,array(
     "id" => "http://blog.scienceopen.com/2016/04/what-if-you-could-peer-review-the-arxiv/"
    ,"name" => "What if you could peer review the arXiv?"
    ,"published" => new DateTime("2016-04-06")
    ,"author" => array(array(
         "id" => "http://blog.scienceopen.com/author/jon-tennant/"
        ,"name" => "Jon Tennant"
      ))
    ,"summary" => "<p>The arXiv is a server that hosts ‘eprints’ or ‘preprints’ of research papers, and is a key publishing platform for many fields, particularly physics and mathematics. Founded back in 1991 by Paul Ginsparg, it currently hosts over 1 million research articles, with more than 8000 submissions per month!</p>"
    ,"slug" => "what-if-you-could-peer-review-the-arxiv"
    ,"root" => "http://blog.scienceopen.com"
  )
  ,array(
     "id" => "https://www.force11.org/fairprinciples"
    ,"name" => "The FAIR Guiding Principles for scientific data management and stewardship"
    ,"published" => new DateTime("2016-03-15")
    ,"author" => array(array(
         "id" => "http://www.wilkinsonlab.info/lab/node/22"
        ,"name" => "Mark D. Wilkinson"
      ),
      array(
          "id" => "https://www.force11.org/group/fairgroup"
          ,"name" => "The FAIR Group"
        )
    )
    ,"summary" => "<p>In the eScience ecosystem, the challenge of enabling optimal use of research data and methods is a complex one with multiple stakeholders: Researchers wanting to share their data and interpretations; Professional data publishers offering their services, software and tool-builders providing data analysis and processing services; Funding agencies (private and public) increasingly concerned with proper Data Stewardship; and a Data Science community mining, integrating and analysing the output to advance discovery. Computational analysis to discover meaningful patterns in massive, interlinked datasets is rapidly becoming a routine research activity. Providing machine-readable data as the main substrate for Knowledge Discovery and for these eScientific processes to run smoothly and sustainably is one of the Grand Challenges of eScience.</p>"
    ,"slug" => "fairprinciples"
    ,"root" => "force11.org"
  )
  ,array(
     "id" => "https://rawgit.com/essepuntato/rash/master/papers/rash-demo-iswc2015.html"
    ,"name" => "The RASH Framework: enabling HTML+RDF submissions in scholarly venues"
    ,"published" => new DateTime("2016-02-16")
    ,"author" => array(array(
         "id" => "http://essepuntato.it"
        ,"name" => "Silvio Peroni"
      ))
    ,"summary" => "<p>This paper introduces the RASH Framework, i.e., a set of specifications and tools for writing academic articles in RASH, a simplified version of HTML. RASH focuses strictly on writing the content of the paper leaving all the issues about its validation, visualisation, conversion, and data extraction to the tools developed within the framework.</p>"
    ,"slug" => "rash-demo-iswc2015"
    ,"root" => "rawgit.com"
  )
  ,array(
     "id" => "http://csarven.ca/linked-research-scholarly-communication"
    ,"name" => "Linked Research: An Approach for Scholarly Communication"
    ,"published" => new DateTime("2015-12-20")
    ,"author" => array(
        array(
           "id" => "http://csarven.ca/#i"
          ,"name" => "Sarven Capadisli"
        ),
        array(
           "id" => "https://rhiaro.co.uk/#me"
          ,"name" => "Amy Guy"
        ),
        array(
           "id" => "https://langec.wordpress.com/about/"
          ,"name" => "Christoph Lange"
        ),
        array(
           "id" => "http://eis.iai.uni-bonn.de/SoerenAuer.html"
          ,"name" => "Sören Auer"
        ),
        array(
           "id" => "https://nicola.io"
          ,"name" => "Nicola Greco"
        )
      )
    ,"summary" => "<p>The future of scholarly communication involves research results, analysis and data all being produced, published, verified and reused interactively on the Web, with ‘papers’ linking to and from each other at a granular level. The academic process of peer review is increasingly becoming open, transparent and decentralised. More broadly, the mechanism for global knowledge sharing is becoming an ongoing conversation between experts, policy makers, implementers, and the general public. This vision is radical, and getting there requires understanding of, and change in, a number of interrelated areas. In this article we break down the problem space and define requirements for advancement towards a Web-based ecosystem for scholarly communication: Linked Research. We discuss our strategy for tackling each of these areas. This includes how we can build on and combine existing well-known technologies and practices for digital publishing, social interactions, decentralised data storage, and semantic data enrichment. We provide an initial assessment of our proposed strategy through an example implementation of tooling which sets out to meet the requirements.</p>"
    ,"slug" => "linked-research-scholarly-communication"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "http://csarven.ca/dokieli"
    ,"name" => "dokieli: decentralised authoring, annotations and social notifications"
    ,"published" => new DateTime("2015-12-19")
    ,"author" => array(
        array(
           "id" => "http://csarven.ca/#i"
          ,"name" => "Sarven Capadisli"
        ),
        array(
           "id" => "https://rhiaro.co.uk/#me"
          ,"name" => "Amy Guy"
        ),
        array(
           "id" => "http://eis.iai.uni-bonn.de/SoerenAuer.html"
          ,"name" => "Sören Auer"
        ),
        array(
           "id" => "https://www.w3.org/People/Berners-Lee/#i"
          ,"name" => "Tim Berners-Lee"
        )
      )
    ,"summary" => "<p>In this article we present an architecture for progressively enhanced user-facing linked data applications and demonstrate this architecture through an open source example implementation: dokieli. dokieli is a general purpose client-side application for document authoring, publication and interaction. Capabilities of the tool are enabled according to the needs and technical resources of the user. The editor is built on open Web standards and the documents are compliant with Linked Data best practices, allowing: decentralised storage and data ownership; fine-grained semantic structure through HTML+RDFa; direct in-browser editing from an LDP-based personal data store; social interactions with documents (such as annotations and replies), and notifications thereof.</p>"
    ,"slug" => "dokieli"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://twitter.com/tompollard/status/669927001948557312"
    ,"name" => "Open Access Hack"
    ,"published" => new DateTime("2015-11-26")
    ,"author" => array(array(
         "id" => "https://twitter.com/tompollard/"
        ,"name" => "Tom Pollard"
      ))
    ,"summary" => "<p>Excellent #openaccess hack by @csarven: Added URL for full article in paywalled abstract</p>"
    ,"slug" => "open-access-hack"
    ,"root" => "twitter.com"
  )
  ,array(
     "id" => "http://csarven.ca/this-paper-is-a-demo"
    ,"name" => "This ‘Paper’ is a Demo"
    ,"published" => new DateTime("2015-02-24")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>This ‘paper’, when viewed on the Web, is the demo itself, since the interactive and semantic features can be directly observed while reading and consuming. The demo showcases, how scholarly communication can adapt to the audience, whether the content is read on a screen or printed on paper, listen with a screen reader, watched as a movie, shown as a presentation, or even interacted with in the document.</p>"
    ,"slug" => "this-paper-is-a-demo"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "http://csarven.ca/enabling-accessible-knowledge"
    ,"name" => "Enabling Accessible Knowledge"
    ,"published" => new DateTime("2014-12-08")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>The purpose of this document is to enable Web researchers to discover and share their knowledge using the native Web technologies and standards for maximum openness, accessibility, and flexibility.</p>"
    ,"slug" => "enabling-accessible-knowledge"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://hypothes.is/blog/supporting-open-annotation/"
    ,"name" => "Supporting Open Annotation"
    ,"published" => new DateTime("2014-10-07")
    ,"author" => array(array(
         "id" => "https://hypothes.is/blog/author/treora/"
        ,"name" => "Gerben"
      ))
    ,"summary" => "<p>In its mission to connect the world’s knowledge and thoughts, the solution Hypothes.is pursues is a web-wide mechanism to create, share and discover annotations. One of our principal steps towards this end is providing a browser add-on that works with our annotation server, enabling people to read others’ annotations on any web page they visit, and to publish their own annotations for others to see.</p>"
    ,"slug" => "supporting-open-annotation"
    ,"root" => "hypothes.is"
  )
  ,array(
     "id" => "http://csarven.ca/call-for-linked-research"
    ,"name" => "Call for Linked Research"
    ,"published" => new DateTime("2014-07-28")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>Scientists and researchers who work in Web Science have to follow the rules that are set by the publisher; researchers need to have read and reuse access to other researchers work, and adopt archaic desktop-native publishing workflows. Publishers try to remain as the middleman for society’s knowledge acquisition.</p>"
    ,"slug" => "call-for-linked-research"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://hypothes.is/blog/peer-review-annotation/"
    ,"name" => "Peer Review and Annotation"
    ,"published" => new DateTime("2014-06-07")
    ,"author" => array(array(
         "id" => "https://hypothes.is/blog/author/pbrantley/"
        ,"name" => "P Brantley"
      ))
    ,"summary" => "<p>On May 15-16, 2014, approximately 60 attendees from AAAS and arXiv to the W3C joined Hypothes.is at an Alfred P. Sloan funded meeting at the American Geophysical Union (AGU) offices in Washington DC to explore new models of peer review and post-publication commentary in the sciences.</p>"
    ,"slug" => "peer-review-annotation"
    ,"root" => "hypothes.is"
  )
  ,array(
     "id" => "http://csarven.ca/linked-research"
    ,"name" => "Linked Research"
    ,"published" => new DateTime("2013-05-17")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>Information control is just an idea and should not to be mistaken as something new. It is an idea that's like a splinter in the minds of some, driving them mad.</p>"
    ,"slug" => "linked-research"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://blogs.ch.cam.ac.uk/pmr/2011/07/09/what-is-wrong-with-scientific-publishing-and-can-we-put-it-right-before-it-is-too-late/"
    ,"name" => "What is wrong with Scientific Publishing and can we put it right before it is too late?"
    ,"published" => new DateTime("2011-07-09")
    ,"author" => array(array(
         "id" => "https://blogs.ch.cam.ac.uk/pmr"
        ,"name" => "Peter Murray-Rust"
      ))
    ,"summary" => "<p>I sat down today to write code and and found that I couldn't – I had to write about science publishing, so here goes. I intend this will be the first of several posts. I often blog in forceful style (rant?) but here will try to be as objective as possible. I'd like to start a discussion and engage responsible STM publishers. I'd like to see if we can define what the basis of publishing is. Why? And how? </p>"
    ,"slug" => "what-is-wrong-with-scientific-publishing"
    ,"root" => "blogs.ch.cam.ac.uk"
  )
  ,array(
     "id" => "http://www.chronicle.com/article/a-manifesto-for-scholarly/44462"
    ,"name" => "A Manifesto for Scholarly Publishing"
    ,"published" => new DateTime("2009-06-02")
    ,"author" => array(array(
         "id" => "http://press.princeton.edu/about_pup/dougherty.html"
        ,"name" => "Peter J. Dougherty"
      ))
    ,"summary" => "<p>In 1948, the University of Illinois Press published Claude Shannon's brief and profoundly influential book The Mathematical Theory of Communication. Shannon's work, which explained how words, sounds, and images could be converted into blips and sent electronically, presaged the digital revolution in communications.</p>"
    ,"slug" => "a-manifesto-for-scholarly"
    ,"root" => "chronicle.com"
  )
);
?>