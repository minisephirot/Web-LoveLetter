<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40271361944bcce363336a8cbabf420d7da9200f5ecbcd3a098ac5ae9491d206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40271361944bcce363336a8cbabf420d7da9200f5ecbcd3a098ac5ae9491d206->enter($__internal_40271361944bcce363336a8cbabf420d7da9200f5ecbcd3a098ac5ae9491d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_13bfc45e57d12d05d4c9e8392e57e5ffb06c69d33ffc07ccf8ec0422e4e8cd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bfc45e57d12d05d4c9e8392e57e5ffb06c69d33ffc07ccf8ec0422e4e8cd4c->enter($__internal_13bfc45e57d12d05d4c9e8392e57e5ffb06c69d33ffc07ccf8ec0422e4e8cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_40271361944bcce363336a8cbabf420d7da9200f5ecbcd3a098ac5ae9491d206->leave($__internal_40271361944bcce363336a8cbabf420d7da9200f5ecbcd3a098ac5ae9491d206_prof);

        
        $__internal_13bfc45e57d12d05d4c9e8392e57e5ffb06c69d33ffc07ccf8ec0422e4e8cd4c->leave($__internal_13bfc45e57d12d05d4c9e8392e57e5ffb06c69d33ffc07ccf8ec0422e4e8cd4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
